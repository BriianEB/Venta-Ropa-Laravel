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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::prefix('productos')->group(function () {
    Route::get('crear', 'ProductosController@crear');
    Route::post('guardar', 'ProductosController@guardar');
});

Route::prefix('ventas')->group(function () {
    Route::get('crear', 'VentasController@crear');
    Route::post('guardar', 'VentasController@guardar');
    Route::get('reporte', 'VentasController@reporte');
});
