<?php

namespace App\Http\Controllers\PaginaInicio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Carrera;
use App\Model\Curso;
use App\Model\Caracteristica;
use App\Model\caracteristicas_cursos;
use App\Model\Tipo;
use Illuminate\Support\Facades\Auth;
use App\Model\Roles_users;

class CursosController extends Controller
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
    public function index($id)
    {
  

         $carreras = Carrera::find($id);
        $cursos = Curso::where('carrera_id','=',$id)->get();
     
        $tipo = Tipo::all();


        if (Auth::check()) {
            // The user is logged in...

            $id_user = Auth::user()->id;

         
            $roles = Roles_users::where('users_id', '=', $id_user)
            ->join('roles', 'roles_users.roles_id', '=', 'roles.id')
            ->select('roles.nombre','roles_users.roles_id')
            ->get();

            return view('paginaInicio/Cursos', compact('carreras','cursos','tipo','roles')); 
        }
        else{
        

        return view('paginaInicio/Cursos', compact('carreras','cursos','tipo')); 
        }
    }

    public function show($id)
    {
  
        $carreras = Carrera::all();
        $curso = Curso::find($id);
        $caracteristicas = Caracteristica::all();
        $caracteristicas_curso = caracteristicas_cursos::all();
        $tipos = Tipo::all();

        if (Auth::check()) {
            // The user is logged in...

            $id_user = Auth::user()->id;

         
            $roles = Roles_users::where('users_id', '=', $id_user)
            ->join('roles', 'roles_users.roles_id', '=', 'roles.id')
            ->select('roles.nombre','roles_users.roles_id')
            ->get();

            return view('paginaInicio/detalleCurso', compact('carreras','curso','tipos','caracteristicas','caracteristicas_curso','roles'));
            
            
        }else{
        
            return view('paginaInicio/detalleCurso', compact('carreras','curso','tipos','caracteristicas','caracteristicas_curso')); 
        }
    }
    
}
