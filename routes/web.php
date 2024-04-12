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
                session(['username' => 'Alan yoltic',
                         'depa'     => 'Auxiliar',
                         'fecha'    => '19/11/1999',
                         'correo'   =>  'usuario1@example.com']);
                return view('cliente.cliente_inicio');
            } else {
                return view('login.login')->with('error', 'Contraseña incorrecta');
            }
        case 'usuario2@example.com':
            if ($password === 'contraseña2') {
                session(['username' => 'Lilian leticia',
                         'depa'     => 'Cliente',
                         'fecha'    => '04/11/1996',
                         'correo'   => 'usuario2@example.com'   ]);
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
/* Rutas jefe */
Route::get('/Jefe_inicio', function(){
    return view('jefe.jefe_inicio');
});

Route::get('/nuevo_cliente', function(){
    return view('jefe.jefe_nuevo_cliente');
});

Route::get('/nuevo_soporte', function(){
    return view('jefe.jefe_nuevo_soporte');
});

Route::get('/buscar_usuario', function(){
    return view('jefe.jefe_buscar_usuario');
});

Route::get('/control_tikets', function(){
    return view('jefe.jefe_control_ticket');
});

Route::get('/consultar_tiket', function(){
    return view('jefe.jefe_consultar_ticket');
});
