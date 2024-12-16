<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// rutas de login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('buscador', [LoginController::class, 'buscador'])->name('buscador.cuenta');
Route::get('recuperar-cuenta/{mail}', [LoginController::class, 'mailRecuperar'])->name('recuperar.cuenta');
// rutas de registro
Route::get('registro', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('registro', [RegisterController::class, 'create'])->name('register');


Route::group(['middleware' => ['auth']], function () {
    // rutas de perfil
    Route::get('perfil', [PerfilController::class, 'index'])->name('perfil.index');
    Route::get('primer-cambio', [PerfilController::class, 'cambioPrimeraVez'])->name('perfil.cambio.password');
    Route::post('primera-vez/{usuario}', [PerfilController::class, 'editPasssword'])->name('perfil.primeraVez');
    Route::put('perfil/edit', [PerfilController::class, 'editPerfil'])->name('perfil.edit');
    Route::put('perfil/edit-password', [PerfilController::class, 'changePassword'])->name('perfil.editPassword');
});
