<?php

namespace App\Http\Controllers\PaginaInicio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Carrera;
use App\Model\Curso;
use App\Model\Caracteristica;
use App\Model\caracteristicas_cursos;
use App\Model\Tipo;

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

        return view('paginaInicio/Cursos', compact('carreras','cursos','tipo')); 
    
    }

    public function show($id)
    {
  
        $carreras = Carrera::all();
        $cursos = Curso::where('id','=',$id)->get();
        $caracteristicas = Caracteristica::all();
        $caracteristicas_curso = caracteristicas_cursos::all();
        $tipos = Tipo::all();

        return view('paginaInicio/detalleCurso', compact('carreras','cursos','tipos','caracteristicas','caracteristicas_curso')); 
    
    }
    
}
