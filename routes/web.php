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


Route::get('/desarrollo','DesarrolloController@index')->name('desarrollo');

Route::get('/clientes','ClientesController@index')->name('clientes');

Route::get('/virtual','VirtualController@index')->name('virtual');

Route::get('/GestionPublica','GestionPublicaController@index')->name('GestionPublica');

// Route::get('/Carrera','CarreraController@index')->name('Carrera');
Route::resource('Carreras', 'CarrerasController');

Route::get('/Cursos/{id}','CursosController@index')->name('Cursos');

Route::get('/detalleCurso/{id}','CursosController@show')->name('detalleCurso');

Route::get('/ContAdmPub','ContAdmPubController@index')->name('Contenido_Administracion_Publica');

Route::get('registro/{id}', 'InscripcionController@inscripcionForm')->name('registro');

Route::get('ciudad/{departamento}', 'InscripcionController@ciudades')->name('ciudades');
Route::post('inscripcion/store', 'InscripcionController@inscripcionSave')->name('inscripcion.save');

Route::get('/homeCursos', 'HomeCursosController@index')->name('homeCursos');