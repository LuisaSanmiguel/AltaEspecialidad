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

        Route::get('/inicio', function () { 
            return view('inicio');
        });

        Route::get('/home', 'HomeController@index')->name('home');

        Route::get('registro/{id}', 'InscripcionController@inscripcionForm')->name('registro');
        
        //Route::get('fichas/{curso_id}', 'PaginaInicio\CursosController@fichas')->name('registro');

        Route::get('ciudad/{departamento}', 'InscripcionController@ciudades')->name('ciudades');

        Route::post('inscripcion/store', 'InscripcionController@inscripcionSave')->name('inscripcion.save');

// Paginas Inicio------------------------------------------------------------------------------------------------

        Route::get('/servicios','PaginaInicio\ServiciosController@index')->name('servicios');

        Route::get('/team','PaginaInicio\TeamController@index')->name('team');

        Route::get('/desarrollo','PaginaInicio\DesarrolloController@index')->name('desarrollo');

        Route::get('/clientes','PaginaInicio\ClientesController@index')->name('clientes');

        Route::get('/','PaginaInicio\CarrerasController@index')->name('Carreras');
        Route::get('/homeCursos', 'HomeCursosController@index')->name('homeCursos');

        Route::get('/Cursos/{id}','PaginaInicio\CursosController@index')->name('Cursos');

        Route::get('/detalleCurso/{id}','PaginaInicio\CursosController@show')->name('detalleCurso');

// PLATAFORMA------------------------------------------------------------------------------------------------

        Route::group([
            'prefix' => 'plataforma',
            'middleware' => ['web','auth']
        ], function() {
                Route::get('/contenido/{id}','Plataforma\ContenidoCursoController@index')->name('contenido');

                Route::get('/AnexoInscripcion/{id}/create','Plataforma\AnexoInscripcionController@create')->name('crearAnexoEst');
                Route::Resource('/AnexoInscripcion','Plataforma\AnexoInscripcionController');
                Route::get('/AnexoInscripcion/delete/{id}','Plataforma\AnexoInscripcionController@destroy')->name('AnexoCursoEst.destroy');




                // Route::get('/escuela/create','Plataforma\EscuelaController@create')->name('escuela.create');
                // Route::get('/escuela','Plataforma\EscuelaController@index')->name('escuela');
                

        });

        Route::group([
            'prefix' => 'admin', 
            'middleware' => ['web','auth', 'admin']
        ], function() {
                Route::get('/usuario','Plataforma\UsuarioController@index')->name('usuarios');

                Route::Resource('/escuela','Plataforma\EscuelaController');
                Route::get('/escuela/delete/{id}','Plataforma\EscuelaController@destroy')->name('escuela.destroy');

 //cursos--------------------------------------------------------------------------------------
                Route::Resource('/curso','Plataforma\CursoController');
                Route::get('/curso/delete/{id}','Plataforma\CursoController@destroy')->name('curso.destroy');
                Route::get('/cursosEscuela/{id}','Plataforma\CursoController@escuela')->name('cursosEscuela');

                // 'cursoCarac.edit',$curso->id
                Route::Resource('/cursoCarac','Plataforma\CursoCaracController');
                Route::get('/cursoCarac/{id}/create','Plataforma\CursoCaracController@create')->name('crearCarac');
                Route::get('/cursoCarac/delete/{id}','Plataforma\CursoCaracController@destroy')->name('cursoCarac.destroy');


                Route::Resource('/AnexoCurso','Plataforma\AnexoCursoController');
                Route::get('/AnexoCurso/{id}/create','Plataforma\AnexoCursoController@create')->name('crearAnexo');
                Route::get('/AnexoCurso/delete/{id}','Plataforma\AnexoCursoController@destroy')->name('AnexoCurso.destroy');

                //fichas--------------------------------------------------------------------------------------
                Route::Resource('/ficha','Plataforma\FichaController');
                Route::get('/fichasCurso/{id}','Plataforma\FichaController@fichasCurso')->name('fichasCurso');
                Route::get('/fichasCurso/{id}/inscritos','Plataforma\FichaController@inscritos')->name('ficha.users');

                
                //hv
                Route::Resource('/hoja-vida','HojaVidaController');

                

                Route::Resource('/inscripciones','Plataforma\InscripcionController');
                Route::get('/inscripciones','Plataforma\InscripcionController@index')->name('inscripciones');
                
                Route::get('/administrar','Plataforma\AdministrarController@index')->name('administrar');

         });
