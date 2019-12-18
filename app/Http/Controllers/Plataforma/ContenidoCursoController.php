<?php

namespace App\Http\Controllers\Plataforma;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

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
          
        $cursos = Curso::where('cursos.id','=', $id)
        ->join('tipos', 'cursos.id_tipo', '=', 'tipos.id')
        ->select('cursos.id','cursos.curso','cursos.fecha_ini','tipos.nombre')
        ->get();
       
//  return $cursos;
        return view('plataforma\ContenidoCurso\contenidoCurso', compact('cursos')); 
    
    }
    
}
