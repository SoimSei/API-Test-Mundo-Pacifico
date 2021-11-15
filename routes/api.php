<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//ROUTES DE REGION
Route::get('regiones', 'RegionController@getAll');
Route::get('regiones/{id}', 'RegionController@getById');

//ROUTES DE PROVINCIA
Route::get('provincias', 'ProvinciaController@getAll');
Route::get('provincias/{id}', 'ProvinciaController@getById');
Route::get('regiones/provincias/{id}', 'ProvinciaController@getAllByRegionId');

//ROUTES DE CIUDAD
Route::get('ciudades', 'CiudadController@getAll');
Route::get('ciudades/{id}', 'CiudadController@getById');
Route::get('provincias/ciudades/{id}', 'CiudadController@getAllByProvinciaId');

//ROUTES DE CALLE
Route::get('calles', 'CalleController@getAll');
Route::get('calles/{id}', 'CalleController@getById');
Route::get('ciudades/calles/{id}', 'CalleController@getAllByCiudadId');

Route::post('calles', 'CalleController@store');
Route::put('calles/{id}', 'CalleController@update');
Route::delete('calles/{id}', 'CalleController@delete');

Route::get('datosCalle/{id}', 'CalleController@getAllDatosCalleById');

Route::get('datosCalle', 'CalleController@getAllDatosCalle');

Route::get('datosCalleLista', 'CalleController@getAllDatosCalleLista');
Route::get('datosCalleLista/{id}', 'CalleController@getAllDatosCalleListaById');
