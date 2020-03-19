<?php

namespace App\Http\Controllers\Plataforma;

use App\Http\Controllers\Controller;
use App\Model\Caracteristica;
use App\Model\caracteristicas_cursos;
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


        $cursos = Curso::where('cursos.id','=', $id)
        ->join('tipos', 'cursos.tipo_id', '=', 'tipos.id')
        ->join('fichas_users', 'cursos.id', '=', 'fichas_users.curso_id')
       ->join('fichas', 'fichas_users.ficha_id', '=', 'fichas.id')
        ->where('fichas_users.user_id', '=', $id_user)
        ->distinct('cursos.id')
        ->select('cursos.*','tipos.nombre','fichas_users.*','fichas.*', 'fichas_users.id as inscripcion')
        ->get();


        $caracteristicas = Caracteristica::all();
        $caracteristicas_curso = caracteristicas_cursos::all();
//  return $cursos;
        return view('/plataforma/ContenidoCurso/contenidoCurso', compact('cursos','caracteristicas','caracteristicas_curso'));

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
