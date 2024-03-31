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
Route::get('/login', function() {
    return view('login.login');
});
Route::get('/recuperacion_contraseña', function() {
    return view('login.recuperacion_contraseña');
});
Route::get('/confirmacion', function() {
    return view('login.confirmacion');
});