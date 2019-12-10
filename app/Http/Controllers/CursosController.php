<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carrera;
use App\Curso;
use App\Caracteristica;
use App\caracteristicas_cursos;
use App\Tipo;

class CursosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
  
        $carreras = Carrera::find($id);
        $cursos = Curso::where('carrera_id','=',$id)->get();
     
        $tipo = Tipo::all();

        return view('paginasInicio/Cursos', compact('carreras','cursos','tipo')); 
    
    }

    public function show($id)
    {
  
        $carreras = Carrera::all();
        $cursos = Curso::where('id','=',$id)->get();
        $caracteristicas = Caracteristica::all();
        $caracteristicas_curso = caracteristicas_cursos::all();
        $tipos = Tipo::all();

        return view('paginasInicio/detalleCurso', compact('carreras','cursos','tipos','caracteristicas','caracteristicas_curso')); 
    
    }
    
}
