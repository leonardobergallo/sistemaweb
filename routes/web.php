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

Route::get('/', 'HomeController@index')->name('home');
Route::resource('usuarios', 'UserController');
Route::resource('socios', 'SocioController');

//Rutas para nuestra seccion de socios
Route::get('/socios/todas', 'SociosController@todas');
Route::get('/socios/favoritas', 'SociosController@favoritas');
Route::get('/socios/archivadas', 'SociosController@archivadas');

