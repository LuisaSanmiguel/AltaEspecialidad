<?php

namespace App\Http\Controllers\Plataforma;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Model\Curso;

class CursoController extends Controller
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
          
        $cursos = Curso::all();

        return view('plataforma\Cursos\CursoIndex', compact('cursos')); 
    
    }
    
}
