<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/','colegiocontroller@index');
Route::get('usuario','colegiocontroller@usuario');
Route::get('usuario/registro','colegiocontroller@registro');
Route::get('validador','colegiocontroller@validar');

