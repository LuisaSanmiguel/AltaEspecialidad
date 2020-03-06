<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Roles_users;
use App\Model\Rol;
use App\Model\inscripcion;
use App\Model\CursoInscripcion;
use App\Model\Curso;
use App\Model\Carrera;
use App\Model\Ficha;
use Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

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


        $id_user = Auth::user()->id;

        // $carreras = Carrera::all();

        // $inscripcions = inscripcion::where('user_id','=',$id)->get();



        // $cursos = Curso::all();


        $cursos = DB::table('users')
                     ->where('user_id','=',$id_user)
                     ->where('cursos.activo','=',1)
                     ->join('fichas_users', 'users.id', '=', 'fichas_users.user_id')
                     ->join('cursos','cursos.id','=','fichas_users.curso_id')
                     ->join('tipos', 'cursos.tipo_id', '=', 'tipos.id')
                     ->distinct('cursos.id')
                     ->select('cursos.id','cursos.curso','tipos.nombre')
                     ->get();


         $tcursos = Curso::select('cursos.id','cursos.curso','tipos.nombre')
                    ->join('tipos', 'cursos.tipo_id', '=', 'tipos.id')
                    ->where('cursos.activo','=',1)
                     ->get();


        $noinscritos =  $tcursos->diffKeys($cursos);
        $noinscritos->all();




    return view('homeCursos', compact('cursos','noinscritos'));

    }
}
