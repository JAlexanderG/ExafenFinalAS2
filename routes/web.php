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

Route::get('/',  'PagesController@inicio')->name('inicio');
Route::get('/muestrareservas',  'PagesController@buscar')->name('buscar');
Route::post('/', 'PagesController@crear')->name('clientes.crear');
Route::get('/detalleVehiculo/{valor}', 'PagesController@test')->name('test');
Route::get('/formulario_renta/{valor2}', 'PagesController@renta')->name('renta');
Route::post('/renta','PagesController@rentaCrear')->name('rentaCrear');

Route::get('/detalleRenta/{valor3}', 'PagesController@detalleRenta')->name('detalle');













Route::patch('/editar/{valor4}', 'PagesController@editar')->name('editar');
    

