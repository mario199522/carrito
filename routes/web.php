<?php

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

Route::get('/', function () { //con rutas 
    return view('welcome');
});

Route::get('/septimo/{id}','persona@prueba'); //con controlador
Route::post('/ingresar','persona@ingresar');
Route::get('/mostrar','persona@mostrar');
Route::get('/eliminar','persona@eliminar');