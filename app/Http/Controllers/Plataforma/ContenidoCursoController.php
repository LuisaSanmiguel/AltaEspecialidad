<?php

namespace App\Http\Controllers\Plataforma;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use App\Model\Curso;
use App\Model\Tipo;
class ContenidoCursoController extends Controller
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
    public function index($id)
    {

        $id_user = Auth::user()->id;
          
        $cursos = Curso::where('cursos.id','=', $id)
        ->join('tipos', 'cursos.id_tipo', '=', 'tipos.id') 
        ->join('curso_inscripcions', 'cursos.id', '=', 'curso_inscripcions.curso_id')
        ->join('inscripcions', 'curso_inscripcions.inscripcion_id', '=', 'inscripcions.id')
        ->where('inscripcions.user_id', '=', $id_user)
        ->distinct('cursos.id')
        ->select('inscripcions.id','curso_inscripcions.curso_id','cursos.curso','cursos.fecha_ini','tipos.nombre','inscripcions.*')
        ->get();
       
//  return $cursos;
        return view('plataforma\ContenidoCurso\contenidoCurso', compact('cursos')); 
    
    }
    
}
