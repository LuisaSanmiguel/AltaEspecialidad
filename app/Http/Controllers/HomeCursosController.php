<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\inscripcion;
use App\Model\CursoInscripcion;
use App\Model\Curso;
use App\Model\Carrera;
use Auth;
use Illuminate\Support\Facades\DB;

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

        // $carreras = Carrera::all();

        // $inscripcions = inscripcion::where('user_id','=',$id)->get();
      
        // $cursoInscs = CursoInscripcion::all();
      

        // $cursos = Curso::all();
        

        $cursos = DB::table('users')
                     ->where('user_id','=',$id)
                    ->join('inscripcions', 'users.id', '=', 'inscripcions.user_id')
                    ->join('curso_inscripcions', 'inscripcions.id', '=', 'curso_inscripcions.inscripcion_id')
                    ->join('cursos', 'curso_inscripcions.curso_id', '=', 'cursos.id')
                    ->join('tipos', 'cursos.id_tipo', '=', 'tipos.id')
                    ->distinct('cursos.id')
                    ->select('cursos.id','cursos.curso','tipos.nombre')
            ->get();

        
        return view('homeCursos', compact('cursos')); 
    
    }
}
