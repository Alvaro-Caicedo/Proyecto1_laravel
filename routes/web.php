<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Productos', function () {
    return view('Productos');    
});

Route::get('Clientes', function () {
    return view('Clientes');   
});

Route::get('Ofertas', function () {
    return view('Ofertas');
});

Route::get('Administracion', function () {
    return view('Administracion.Usuario');
});