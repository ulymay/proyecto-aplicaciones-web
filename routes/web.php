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

Route::get('/', function () {
    return view('welcome');
});

Route::any('saludarview/{$nombre?}', function ($nombre='Mundo') {
    return view('saludar')->with('nombre', $nombre);
});

Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        return 'Estamos en el administrador de usuarios';
    });

    Route::get('dashboard', function () {
        return 'Estamos en el panel principal';
    });

    Route::get('carros', 'CarroController@index');
    Route::get('carros/{id}', 'CarroController@index');

    

});
