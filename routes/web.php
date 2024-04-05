<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente_inicio', function () {
    return view('cliente.cliente_inicio');
});

Route::get('/cliente_Editarperfil', function () {
    return view('cliente.cliente_Editarperfil');
});

Route::get('/cliente_perfil', function () {
    return view('cliente.cliente_perfil');
});
Route::get('/cliente_solicitarticker', function () {
    return view('cliente.cliente_solicitarticker');
});
Route::get('/cliente_consultarticket', function() {
    return view('cliente.cliente_consultarticket');
});
Route::get('/index', function() {
    return view('index');
});
//////////////////// LOGIN  /////////////////
Route::get('/login', function() {
    return view('login.login');
});

Route::post('/loginss', function() {
    $email = request('email');
    $password = request('password');

    // Verificar correo y contraseña
    switch ($email) {
        case 'usuario1@example.com':
            if ($password === 'contraseña1') {
                session(['username' => 'Usuario 1']);
                return view('cliente.cliente_inicio');
            } else {
                return view('login.login')->with('error', 'Contraseña incorrecta');
            }
        case 'usuario2@example.com':
            if ($password === 'contraseña2') {
                session(['username' => 'Usuario 2']);
                return view('auxiliar.auxiliar_inicio');
            } else {
                return view('login.login')->with('error', 'Contraseña incorrecta');
            }
        default:
            return view('login.login')->with('error', 'Correo no reconocido');
    }
})->name('loginss.process');


Route::get('/recuperacion_contraseña', function() {
    return view('login.recuperacion_contraseña');
});
Route::get('/confirmacion', function() {
    return view('login.confirmacion');
});
//////////////////// AUXILIAR  /////////////////
Route::get('/auxiliar_inicio', function() {
    return view('auxiliar.auxiliar_inicio');
});
Route::get('/auxiliar_perfil', function() {
    return view('auxiliar.auxiliar_perfil');
});
Route::get('/auxiliar_editarperfil', function() {
    return view('auxiliar.auxiliar_editarperfil');
});
Route::get('/auxiliar_controlticket', function() {
    return view('auxiliar.auxiliar_controlticket');
});
Route::get('/auxiliar_buscarticket', function() {
    return view('auxiliar.auxiliar_buscarticket');
});
Route::get('/auxiliar_reportes', function() {
    return view('auxiliar.auxiliar_reportes');
});
