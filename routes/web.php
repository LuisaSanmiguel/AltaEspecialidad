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

Route::get('/', function () { return view('inicio');});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/homeCursos', 'HomeCursosController@index')->name('homeCursos');

Route::get('registro/{id}', 'InscripcionController@inscripcionForm')->name('registro');

Route::get('ciudad/{departamento}', 'InscripcionController@ciudades')->name('ciudades');

Route::post('inscripcion/store', 'InscripcionController@inscripcionSave')->name('inscripcion.save');

// Paginas Inicio------------------------------------------------------------------------------------------------

Route::get('/servicios','PaginaInicio\ServiciosController@index')->name('servicios');

Route::get('/team','PaginaInicio\TeamController@index')->name('team');

Route::get('/desarrollo','PaginaInicio\DesarrolloController@index')->name('desarrollo');

Route::get('/clientes','PaginaInicio\ClientesController@index')->name('clientes');

Route::get('/Carreras','PaginaInicio\CarrerasController@index')->name('Carreras');

Route::get('/Cursos/{id}','PaginaInicio\CursosController@index')->name('Cursos');

Route::get('/detalleCurso/{id}','PaginaInicio\CursosController@show')->name('detalleCurso');

// PLATAFORMA------------------------------------------------------------------------------------------------


Route::get('/escuela','Plataforma\EscuelaController@index')->name('escuela');
Route::get('/curso','Plataforma\CursoController@index')->name('cursos');
Route::get('/usuario','Plataforma\UsuarioController@index')->name('usuarios');
Route::get('/inscripciones','Plataforma\InscripcionController@index')->name('inscripciones');
Route::get('/contenido/{id}','Plataforma\ContenidoCursoController@index')->name('contenido');