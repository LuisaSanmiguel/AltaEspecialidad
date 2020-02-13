<?php

namespace App\Http\Controllers\Plataforma;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\Roles_users;
use App\Model\Rol;
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
        $id_user = Auth::user()->id;


        $roles = Roles_users::where('users_id', '=', $id_user)
        ->join('roles', 'roles_users.roles_id', '=', 'roles.id')
        ->select('roles.nombre','roles_users.roles_id')
        ->get();

        // $users = User::all();
        // $inscripcions = Inscripcion::all();
        // $cursoinscs = CursoInscripcion::all();
        // $cursos = Curso::all();

        $cursos = DB::table('users')
                    ->orderBy ('users.id', 'ASC') 
                    ->join('inscripcions', 'users.id', '=', 'inscripcions.user_id')
                    ->join('curso_inscripcions', 'inscripcions.id', '=', 'curso_inscripcions.inscripcion_id')
                    ->join('cursos', 'curso_inscripcions.curso_id', '=', 'cursos.id')
                    ->join('tipos', 'cursos.id_tipo', '=', 'tipos.id')
                    ->distinct('cursos.id')
                    ->select('users.id','users.name','users.email','inscripcions.typeDoc','inscripcions.numDc','inscripcions.aprobo','cursos.id','cursos.curso','tipos.nombre')
            ->get();
//  return $cursos;
        return view('plataforma/Inscripciones/Index', compact('cursos','roles')); 
    
    }
    
}
