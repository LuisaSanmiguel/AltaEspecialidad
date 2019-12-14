<?php

namespace App\Http\Controllers\Plataforma;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;
use App\Model\Inscripcion;
use App\Model\CursoInscripcion;
use App\Model\Curso;

class InscripcionController extends Controller
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
    public function index()
    {
          
        $users = User::all();
        $inscripcions = Inscripcion::all();
        $cursoinscs = CursoInscripcion::all();
        $cursos = Curso::all();

        return view('plataforma\Inscripciones\InscripcionesIndex', compact('users','inscripcions','cursoinscs','cursos')); 
    
    }
    
}
