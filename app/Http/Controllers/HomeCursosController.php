<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\inscripcion;
use App\Model\CursoInscripcion;
use App\Model\Curso;
use App\Model\Carrera;
use Auth;

class HomeCursosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        

        $id = Auth::user()->id;

        $carreras = Carrera::all();

        $inscripcions = inscripcion::where('user_id','=',$id)->get();
      

        $cursoInscs = CursoInscripcion::all();
      

        $cursos = Curso::all();
        

        return view('homeCursos', compact('carreras','inscripcions','cursoInscs','cursos')); 
    
    }
}
