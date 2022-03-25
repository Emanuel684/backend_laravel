<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cursos', 'App\Http\Controllers\cursosController@index'); // Mostramos todos los registros dentro de la base de datos
Route::post('/cursos', 'App\Http\Controllers\cursosController@store'); // Creamos un nuevo registro dentro de la base de datos
Route::put('/cursos/{id}', 'App\Http\Controllers\cursosController@update'); // Actualizamos un registro de la base de datos
Route::delete('/cursos/{id}', 'App\Http\Controllers\cursosController@destroy'); // Eliminamos un registro dentro de la base de datos
