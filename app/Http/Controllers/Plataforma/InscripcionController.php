<?php

namespace App\Http\Controllers\Plataforma;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\Roles_users;
use App\Model\Rol;
use App\User;
use App\Model\FichasUser;
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


        // $users = User::all();
        // $inscripcions = Inscripcion::all();
        // $cursoinscs = CursoInscripcion::all();
        // $cursos = Curso::all();

        $cursos = DB::table('users')
                    ->orderBy ('users.id', 'ASC')
                    ->join('fichas_users', 'users.id', '=', 'fichas_users.user_id')
                    ->join('fichas', 'fichas_users.ficha_id', '=', 'fichas.id')
                    ->join('cursos','cursos.id','=','fichas.curso_id')
                    ->join('tipos', 'cursos.tipo_id', '=', 'tipos.id')
                    ->distinct('cursos.id')
                    ->select('users.id','users.name','users.email','users.typeDoc','users.numDc','fichas_users.estado','cursos.id','cursos.curso','tipos.nombre')
            ->get();
//  return $cursos;
        return view('plataforma/Inscripciones/Index', compact('cursos'));

    }

    public function show($id)
    {

        $inscripciones = DB::table('users')
                    ->orderBy ('users.id', 'ASC')
                    ->join('fichas_users', 'users.id', '=', 'fichas_users.user_id')
                    ->join('fichas', 'fichas_users.ficha_id', '=', 'fichas.id')
                    ->join('cursos','cursos.id','=','fichas.curso_id')
                    ->join('tipos', 'cursos.tipo_id', '=', 'tipos.id')
                    ->where('fichas.id','=',$id)
                    ->distinct('cursos.id')
                    ->select('users.id','users.name','users.email','users.typeDoc','users.numDc','fichas_users.estado','fichas.codigo','cursos.id as curso_id','cursos.curso','tipos.nombre')
                    ->get();
//   return $inscripciones;
       return view('plataforma/Inscripciones/InscripcionesFicha', compact('inscripciones'));

    }

}
