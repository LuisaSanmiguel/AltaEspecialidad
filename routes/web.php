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

Route::get('/', function () { return view('inicio');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/team','TeamController@index')->name('team');

Route::get('/servicios','ServiciosController@index')->name('servicios');

Route::get('/virtual','VirtualController@index')->name('virtual');

Route::get('/GestionPublica','GestionPublicaController@index')->name('GestionPublica');

Route::get('/ContAdmPub','ContAdmPubController@index')->name('Contenido_Administracion_Publica');