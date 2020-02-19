<?php

namespace App\Http\Controllers\Plataforma;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use App\Model\Roles_users;
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

        $roles = Roles_users::where('users_id', '=', $id_user)
        ->join('roles', 'roles_id', '=', 'roles.id')
        ->select('roles.nombre','roles_users.*')
        ->get();


        $cursos = Curso::where('cursos.id','=', $id)
        ->join('tipos', 'cursos.tipo_id', '=', 'tipos.id')
        ->join('curso_inscripcions', 'cursos.id', '=', 'curso_inscripcions.curso_id')
        ->join('inscripcions', 'curso_inscripcions.inscripcion_id', '=', 'inscripcions.id')
        ->where('inscripcions.user_id', '=', $id_user)
        ->distinct('cursos.id')
        ->select('inscripcions.id','curso_inscripcions.curso_id','cursos.curso','tipos.nombre','inscripcions.*')
        ->get();

//  return $cursos;
        return view('/plataforma/ContenidoCurso/contenidoCurso', compact('cursos','roles'));

    }


    public function create()
    {


        return view('plataforma/ContenidoCurso/create');

    }

    public function store()
    {

   //

    }

    public function edit($id)
    {

   //

    }
    public function update()
    {

   //

    }

    public function destroy()
    {

   //

    }

}
