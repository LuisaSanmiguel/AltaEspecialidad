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


        $id_user = Auth::user()->id;

        // $carreras = Carrera::all();

        // $inscripcions = inscripcion::where('user_id','=',$id)->get();

        $roles = Roles_users::where('users_id', '=', $id_user)
        ->join('roles', 'roles_users.roles_id', '=', 'roles.id')
        ->select('roles.nombre','roles_users.roles_id')
        ->get();


        // $cursos = Curso::all();


        $cursos = DB::table('users')
                     ->where('user_id','=',$id_user)
                    ->join('inscripcions', 'users.id', '=', 'inscripcions.user_id')
                    ->join('curso_inscripcions', 'inscripcions.id', '=', 'curso_inscripcions.inscripcion_id')
                    ->join('cursos', 'curso_inscripcions.curso_id', '=', 'cursos.id')
                    ->join('tipos', 'cursos.tipo_id', '=', 'tipos.id')
                    ->distinct('cursos.id')
                    ->select('cursos.id','cursos.curso','tipos.nombre')
            ->get();

            // return $cursos;
        return view('homeCursos', compact('cursos','roles'));

    }
}
