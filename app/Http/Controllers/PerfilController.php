<?php

namespace App\Http\Controllers;

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
use App\Models\Genero;
use App\Models\Orden;
use Illuminate\Support\Facades\DB;

class PerfilController extends Controller
{
    // usuario autenticado
    /** @var \App\Models\User $user */
    private $user;
    // construcctor de autenticacion
    public function __construct()
    {
        $this->middleware('auth')->except(['registrado', 'validacion']);
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();  // Asignación de $user en el middleware
            return $next($request);
        });
    }
    // pagina de inicio
    public function index()
    {
        // verifica si es algún administrador
        if ($this->user && $this->user->hasRole('Becador')) {
            return redirect()->route('becas.index')->with('bienvenida', true);
        } elseif ($this->user && !$this->user->hasRole(['No Socio', 'Socio'])) {
            return view('modules.personas.bienvenida');
        }

        $perfil = Persona::where('id', $this->user->persona_id)->first();

        // combos
        $estados = Estados::where('estatus', 1)->get(['id', 'estado']);
        $paises = Pais::where('estatus', 1)->get(['id', 'pais', 'codigo']);
        $especialidades = Especialidad::where('estatus', 1)->get(['id', 'especialidad']);
        $exhibiciones = Exhibicion::where('estatus', 1)->get(['id', 'exhibicion']);
        $formas = FormaPago::where('estatus', 1)->get(['id', 'forma']);
        $generos = Genero::where('estatus', 1)->get(['id', 'genero']);

        // para cuando no hay datos existentes
        $perfil->fechaNacimiento = 'Sin fecha de nacimiento';
        $perfil->edad = 'Sin edad';
        $perfil->especialidad = 'Sin especialidad';
        $perfil->correo = 'Sin correo';
        $perfil->genero = 'Sin género';
        $perfil->pais = 'Sin país';

        // valida si hay datos en los campos
        if (isset($perfil->fecha_nac)) {
            $perfil->fechaNacimiento = $perfil->fecha_nac;
            $perfil->edad = Carbon::createFromFormat('Y-m-d', $perfil->fecha_nac)->age . ' años';
        }
        if (isset($perfil->cat_especialidad_id)) {
            $perfil->especialidad = $perfil->especialidad()->value('especialidad');
        }
        if (isset($this->user->email)) {
            $perfil->correo = $this->user->email;
        }
        if (isset($perfil->cat_genero_id)) {
            $perfil->genero = $perfil->genero()->value('genero');
        }
        if (isset($perfil->cat_pais_id)) {
            $perfil->pais = $perfil->pais()->value('pais');
        }

        // ordenes del diplomado
        $diplomados = Orden::where('estatus', 1)->get();

        return view('modules.personas.perfil', compact('perfil', 'especialidades', 'paises', 'estados', 'exhibiciones', 'formas', 'generos', 'diplomados'));
    }
    // Edita los datos personales del perfil
    public function editPerfil(Request $request)
    {
        $perfil = Persona::where('id', $this->user->persona_id)->first();

        // validación
        $request->validate([
            'nombre' => ['required', 'string'],
            'paterno' => ['required', 'string'],
            'materno' => ['required', 'string'],
            'fecha_nacimiento' => ['required', 'date'],
            'pais' => ['required'],
            'telefono' => ['required', 'numeric', 'min:8'],
            'email' => ['required', 'email', 'unique:users,email,' . $this->user->id, 'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'],
            'genero' => ['required'],
            'especialidad' => ['required'],
            'entidad' => ['sometimes'],
        ]);

        // preparación y actualizacion de datos
        DB::beginTransaction();
        try {

            // actualiza correo
            $this->user->update([
                'email' => $request['email'],
            ]);

            // actualiza datos personales
            $perfil->update([
                'nombre' => $request['nombre'],
                'paterno' => $request['paterno'],
                'materno' => $request['materno'],
                'fecha_nac' => $request['fecha_nacimiento'],
                'cat_pais_id' => $request['pais'],
                'telefono' => $request['telefono'],
                'cat_genero_id' => $request['genero'],
                'cat_especialidad_id' => $request['especialidad'],
                'cat_estados_id' => $request['entidad'] ?? null,
            ]);

            // ejecuta y termina proceso
            DB::commit();
            return redirect()->route('perfil.index')->with('success', 'El cambio de datos se realizo con exito');
        } catch (\Exception $e) {
            // error, cancela el proceso y termina
            DB::rollBack();
            return redirect()->back()->with('error', 'No se pudo actualizar los datos del perfil, comuniquese para mas informacion');
        }
    }

    // funcion para cambiar contraseña (3 campos)
    public function changePassword(Request $request)
    {

        $request->validate([
            'password_old' => ['required', 'string', 'min: 8'],
            'password' => ['required', 'string', 'min: 8', 'confirmed'],
        ], [
            'confirmed' => 'Las contraseñas no coinciden'
        ]);

        if (Hash::check($request['password_old'], $this->user->password)) {
            if (!Hash::check($request['password'], $this->user->password)) {
                $this->user->password = Hash::make($request['password']);
                if ($this->user->save()) {
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
        return view('modules.personas.cambio-contrasenia', ['id_usuario' => $this->user->id]);
    }

    // funcion para el cambio de contraseña cuando entra por primera vez
    public function editPasssword(Request $request, User $usuario)
    {
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
