<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Estados;
use App\Models\Pais;
use App\Models\Persona;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Especialidad;
use App\Models\Exhibicion;
use App\Models\FormaPago;


class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['registrado', 'validacion']);
    }
    public function index()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        // if ($user->hasRole('Federado') || $user->hasRole('No Federado') || $user->hasRole('Asociado')) {
        // $idPago = null;

        $estados = Estados::where('estatus', 1)->get(['id', 'estado']);
        $paises = Pais::where('estatus', 1)->get(['id', 'pais', 'codigo']);
        $especialidades = Especialidad::where('estatus', 1)->get(['id', 'especialidad']);
        $exhibiciones = Exhibicion::where('estatus', 1)->get(['id', 'exhibicion']);
        $formas = FormaPago::where('estatus', 1)->get(['id', 'forma']);

        $perfil = Persona::where('id', $user->persona_id)->first();

        // if ($perfil->fecha_nac) {
        //     $perfil->edad = Carbon::createFromFormat('Y-m-d', $perfil->fecha_nac)->age;
        // }

        // if ($perfil->cat_categoria_id) {
        //     $perfil->categoria = Categoria::where('id', $perfil->cat_categoria_id)->first(['categoria'])->categoria;
        // }
        // $perfil->correo = $user->email;
        // if ($user->clave_federado) {
        //     $perfil->clave_federado = $user->clave_federado;
        // }

        // if ($perfil->cat_pais_id) {
        //     $perfil->pais = $perfil->pais->pais;
        // }

        return view('modules.personas.perfil', compact('perfil', 'especialidades', 'paises', 'estados','exhibiciones','formas'));

        // } else {
        //     if (!$user->hasRole('Becador')) {
        //         return view('modules.personas.bienvenida');
        //     }
        //     return redirect()->route('becas.index')->with('bienvenida', true);
        // }
    }

    // Edita los datos personales del perfil
    public function editPerfil(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $perfil = Persona::where('id', $user->persona_id)->first();

        $request->validate([
            'nombre' => ['required', 'string'],
            'apellido_paterno' => ['required', 'string'],
            'apellido_materno' => ['required', 'string'],
            'telefono' => ['required', 'numeric', 'min:8'],
            'email' => ['required', 'email', 'unique:users,email,' . $user->id, 'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'],
            'fecha_nacimiento' => ['required', 'date'],
            'pais' => ['required'],
            'entidad' => ['sometimes'],
            'constancia' => ['sometimes', 'file', 'mimes:pdf', 'max:10000'],
            'genero' => ['required'],
            'categoria' => ['required']
        ]);

        try {

            $user->update([
                'email' => $request['email'],
            ]);

            $perfil->update([
                'nombre' => $request['nombre'],
                'paterno' => $request['apellido_paterno'],
                'materno' => $request['apellido_materno'],
                'telefono' => $request['telefono'],
                'fecha_nac' => $request['fecha_nacimiento'],
                'cat_genero_id' => $request['genero'],
                'cat_categoria_id' => $request['categoria'],
                'cat_paises_id' => $request['pais'],
                'cat_estados_id' => $request['entidad'],
            ]);

            if ($request->hasFile('constancia')) {
                // obtener archvo subido
                $file = $request->file('constancia');
                // nombrar archvio
                $nombrePDF = 'CFI_' . $perfil->id . '.pdf';
                // mover a la ubicacion deseada
                // para servidor
                $file->move(base_path() . '/public_html/files/cfi/', $nombrePDF);
                // para local
                // $file->move(public_path('files/pdf/cfi'), $nombrePDF);
            }

            return redirect()->route('perfil.index')->with('success', 'El cambio de contraseña se realizo con exito');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'No se pudo actualizar los datos del perfil, comuniquese para mas informacion');
        }
    }

    // funcion para cambiar contraseña (3 campos)
    public function changePassword(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $request->validate([
            'password_old' => ['required', 'string', 'min: 8'],
            'password' => ['required', 'string', 'min: 8', 'confirmed'],
        ], [
            'confirmed' => 'Las contraseñas no coinciden'
        ]);

        if (Hash::check($request['password_old'], $user->password)) {
            if (!Hash::check($request['password'], $user->password)) {
                $user->password = Hash::make($request['password']);
                if ($user->save()) {
                    return redirect()->route('perfil.index')->with('success', 'El cambio de contraseña se realizo con exito');
                } else {
                    $mensajePass = 'No se pudo realizar el cambio de contraseña';
                }
            } else {
                $mensajePass = 'La nueva contraseña debe ser diferente a la anterior';
            }
        } else {
            $mensajePass = 'La contraseña no es identica a la anterior';
        }

        return redirect()->back()->with('error', $mensajePass);
    }

    public function cambioPrimeraVez()
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();
        return view('modules.personas.cambio-contrasenia', ['id_usuario' => $user->id]);
    }

    // funcion para el cambio de contraseña cuando entra por primera vez
    public function editPasssword(Request $request, User $usuario)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $request->validate([
            'password' => ['required', 'string', 'confirmed']
        ], [
            'confirmed' => 'Las contraseñas no coinciden'
        ]);

        if (!($request['password'] == 'Opera1234')) {
            $usuario->password = Hash::make($request['password']);
            if ($usuario->save()) {
                return redirect()->route('perfil.index')->with(['success' => 'La contraseña ha sido cambiada', 'datos' => 'Verifica tus datos']);
            }
        }

        return redirect()->back()->with('error', 'La contraseña debe ser diferente a la que le asignaron');
    }

    private function userFileExists(int $user_id)
    {
        $nombrePDF = 'CFI_' . $user_id . '.pdf';

        // para local
        // return file_exists(public_path() . '/files/pdf/cfi/'. $nombrePDF);

        // para servidor
        return file_exists(base_path() . '/public_html/files/pdf/cfi/' . $nombrePDF);
    }
}
