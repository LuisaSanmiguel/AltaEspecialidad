<?php

namespace App\Http\Controllers\Plataforma;
use Auth;
use App\Http\Controllers\Controller;
use App\Model\Caracteristica;
use App\Model\caracteristicas_cursos;
use App\Model\Carrera;
use Illuminate\Http\Request;
use App\Model\Roles_users;
use App\Model\Rol;
use App\Model\Curso;
use App\Model\Tipo;

class CursoCaracController extends Controller
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




      //  return view('plataforma/Cursos/indexc', compact('cursos','roles'));

    }



    public function create($id)
    {
        $curso = Curso::where('id',$id)->first();
        $caracteristicas = Caracteristica::OrderBy('nombre','ASC')->get();

         return view('plataforma/Cursos/createCarac', compact('curso','caracteristicas'));

    }

    public function store(Request $request)
    {

   //

         $caracteristica = new caracteristicas_cursos();
         $caracteristica->curso_id = $request->curso_id;
         $caracteristica->caracteristica_id = $request->caracteristica_id;
         $caracteristica->contenido = $request->contenido;
         $caracteristica->save();


        // //
       return back()->with('success','La nueva característica se agrego al curso');
    }

    public function edit($id)
    {
       //
            $curso = Curso::where('id','=',$id)->first();
            $id_user = Auth::user()->id;


            $roles = Roles_users::where('users_id', '=', $id_user)
            ->join('roles', 'roles_users.roles_id', '=', 'roles.id')
            ->select('roles.nombre','roles_users.roles_id')
            ->get();

            $carreras = Carrera::all();
            $cursos = Curso::where('id','=',$id)->get();
            $caracteristicas = Caracteristica::all();
            $caracteristicas_curso = caracteristicas_cursos::all();
            $tipos = Tipo::all();


            return view('plataforma/Cursos/editCarac', compact('carreras','cursos','curso','tipos','caracteristicas','caracteristicas_curso','roles'));

    }


    public function update(Request $request, $id)
    {

        return $request;
//    //
//             $curso = Curso::findOrFail($id);
//             $curso->curso = $request->curso;
//             $curso->duracion = $request->duracion;
//             $curso->presentacion = $request->presentacion;
//             $curso->obj_general = $request->obj_general;
//             $curso->tipo_id = $request->tipo;
//             $curso->carrera_id = $request->carrera;
//             $curso->activo = $request->estado;
//             $curso->perfil_entrada = $request->perfil_entrada;
//             $curso->perfil_salida = $request->perfil_salida;
//             $curso->save();


//             //
//             return redirect()->route('curso.index');
    }


    public function show($id)
    {

   //


    }


    public function destroy()
    {

   //

    }

}
