<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RecuperarCuentaMail;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
    public function login(Request $request)
    {
        // if (!$this->verificarRecaptcha($request)) {
        //     return back()->withErrors(['captcha' => 'Error en la validación del CAPTCHA.']);
        // }
        $this->validateLogin($request);
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }

            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
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
    protected function redirectTo()
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();

        if ($user->contraseniaPorDefecto()) {
            return '/primer-cambio';
        }
        return '/perfil';
    }
    protected function cambiarPassword($mail)
    {
        DB::beginTransaction();
        try {
            $usuario = User::where('email', $mail)->first();
            $passNew = 'TemporalAMETD';
            if (isset($usuario)) {
                $usuario->update([
                    'password' => Hash::make($passNew)
                ]);
            } else {
                DB::rollBack();
                return false;
            }
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            return false;
        }
    }
    public function mailRecuperar(Request $request)
    {
        if ($this->cambiarPassword($request['mail'])) {
            Mail::to([$request['mail']])->send(new RecuperarCuentaMail($request['mail']));
            return redirect()->back()->with('mail-enviado', true);
        } else {
            return redirect()->back()->with('error', 'El correo no existe en nuestro sistema, para mas información contactenos');
        }
    }
}
