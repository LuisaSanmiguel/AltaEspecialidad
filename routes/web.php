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

// Route::get('/', function () { return view('inicio');});

        Route::get('/', 'HomeController@index')->name('home');

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

        // Route::group(['middleware' => 'auth'], function () {
            //
        Route::group(['prefix' => 'Plataforma'], function() {
      
                Route::get('/escuela/create','Plataforma\EscuelaController@create')->name('escuela.create');
                Route::Resource('/escuela','Plataforma\EscuelaController');
                Route::get('/escuela','Plataforma\EscuelaController@index')->name('escuela');



                //cursos---------------------------------------------------------------------------------------
                // Route::get('/curso/create','Plataforma\CursoController@create')->name('curso.create');
                

                Route::Resource('/curso','Plataforma\CursoController');
                // Route::get('/curso','Plataforma\CursoController@index')->name('curso');
                // Route::get('/curso/update/{id}','Plataforma\CursoController@edit')->name('curso.update');


                Route::get('/usuario','Plataforma\UsuarioController@index')->name('usuarios');
                Route::get('/inscripciones','Plataforma\InscripcionController@index')->name('inscripciones');
                Route::get('/contenido/{id}','Plataforma\ContenidoCursoController@index')->name('contenido');
                Route::get('/administrar','Plataforma\AdministrarController@index')->name('administrar'); 

        });
// });

