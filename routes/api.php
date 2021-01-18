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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('publicaciones', 'PublicacionController@index');
Route::get('publicaciones/{id}', 'PublicacionController@show');
Route::post('publicaciones', 'PublicacionController@store');
Route::put('publicaciones/{id}', 'PublicacionController@update');
Route::delete('publicaciones/{id}', 'PublicacionController@delete');

Route::get('usuarios', 'UsuarioController@index');
Route::get('usuarios/{id}', 'UsuarioController@show');
Route::post('usuarios', 'UsuarioController@store');
Route::put('usuarios/{id}', 'UsuarioController@update');
Route::delete('usuarios/{id}', 'UsuarioController@delete'); 