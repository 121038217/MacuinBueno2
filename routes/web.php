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
    return view('cliente_inicio');
});

Route::get('/cliente_Editarperfil', function () {
    return view('cliente_Editarperfil');
});

Route::get('/cliente_perfil', function () {
    return view('cliente_perfil');
});
Route::get('/cliente_solicitarticker', function () {
    return view('cliente_solicitarticker');
});
