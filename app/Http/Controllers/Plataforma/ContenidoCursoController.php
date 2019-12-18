<?php

namespace App\Http\Controllers\Plataforma;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Model\Curso;

class ContenidoCursoController extends Controller
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
          
        $cursos = Curso::where('id','=', $id)->get();

        return view('plataforma\ContenidoCurso\contenidoCurso', compact('cursos')); 
    
    }
    
}
