<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\Persona;
use App\Models\Especialidad;
use App\Models\Estados;
use App\Models\Exhibicion;
use App\Models\FormaPago;
use App\Models\Pais;

use GuzzleHttp\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/perfil';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $especialidades = Especialidad::where('estatus', 1)->get(['id', 'especialidad']);
        $exhibiciones =Exhibicion ::where('estatus', 1)->get(['id', 'exhibicion']);
        $formas =FormaPago::where('estatus', 1)->get(['id', 'forma']);
        return view('auth.register', compact('formas','especialidades', 'exhibiciones'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required',
            'paterno' => 'required',
            'materno' => 'required',
            'telefono' => ['required', 'numeric'],
            'email' => ['required', 'email', 'unique:users', 'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'],
            'forma'=> 'required',
            'especialidad'=> 'required',
            'exhibicion'=> 'required',
           
            'password' => ['confirmed', 'required'],
        ], [
            'confirmed' => 'La contraseña no coincide',
            'email.unique' => 'El correo electronico ya existe',
        ]);
    }

    public function verificarRecaptcha(Request $request)
    {
        $recaptchaResponse = $request->input('g-recaptcha-response');
        $secret = '6Lfm35YqAAAAAEnFtmNwHUSSUJqClnlNpDq11TWa';

        if (empty($recaptchaResponse)) {
            return false;
        }

        $client = new Client();
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => $secret,
                'response' => $recaptchaResponse,
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['success'] ?? false;
    }
    
    protected function create(Request $request)
    {
        $data = $request->all();
        // if (!$this->verificarRecaptcha($request)) {
        //     return back()->withErrors(['captcha' => 'Error en la validación del CAPTCHA.']);
        // }

        // dd($request);
        $this->validator($data)->validate();
      
        DB::beginTransaction();
        try {
            $persona = new Persona();
            $persona->nombre = ucwords($data['name']);
            $persona->paterno = ucfirst($data['paterno']);
            $persona->materno = ucfirst($data['materno']);
            $persona->telefono = $data['telefono'];
            $persona->cat_especialidad_id = $data['especialidad'];
            $persona->estatus = 1;

            if ($persona->save()) {
                $usuario = new User();
                $usuario->name = ucwords($data['name']);
                $usuario->email = strtolower($data['email']);
                $usuario->password = Hash::make($data['password']);
                $usuario->respass = $data['password'];
                $usuario->persona_id = $persona->id;
            }

            // $datos = [
            //     'nombre_completo' => "$persona->nombre $persona->paterno $persona->materno",
            //     'telefono' => $persona->telefono,
            //     'pais' => $persona->pais->pais,
            //     'categoria' => $persona->categoria->categoria,
            //     'correo' => $usuario->email,
            //     'contraseña' => $data['password']
            // ];

            if ($usuario->save()) {
                        
                    $usuario->assignRole('No Socio');
                    // Mail::to(['registrofmcaac@gmail.com', $usuario->email])->send(new NuevoUsuario($datos));

                    DB::commit();

                    $this->guard()->login($usuario);

                    if ($response = $this->registered($request, $usuario)) {
                        return $response;
                    }

                    return $request->wantsJson()
                        ? new JsonResponse([], 201)
                        : redirect($this->redirectPath());   
            }

        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return redirect()->back()->with('error', 'Hubo problemas para registrarse, intentelo de nuevo por favor.');
        }
    }
}
