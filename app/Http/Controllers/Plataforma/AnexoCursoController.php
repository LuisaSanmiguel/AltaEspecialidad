<?php

namespace App\Http\Controllers\Plataforma;
use Auth;
use App\Http\Controllers\Controller;
use App\Model\Anexo;
use App\Model\Caracteristica;
use App\Model\caracteristicas_cursos;
use App\Model\Carrera;
use Illuminate\Http\Request;
use App\Model\Roles_users;
use App\Model\Rol;
use App\Model\Curso;
use App\Model\Tipo;

class AnexoCursoController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('user')->except('show');

    }

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
        $cursos = Curso::all();


      //  return view('plataforma/Cursos/indexc', compact('cursos','roles'));

    }



    public function create($id)
    {
       //
            $curso = Curso::where('id','=',$id)->first();
            $id_user = Auth::user()->id;


            $roles = Roles_users::where('users_id', '=', $id_user)
            ->join('roles', 'roles_users.roles_id', '=', 'roles.id')
            ->select('roles.nombre','roles_users.roles_id')
            ->get();




            return view('plataforma/Cursos/createAnexo', compact('curso','roles'));

    }

    public function store(Request $request)
    {

       // dd($request->file);
         $anexo =  new Anexo();
        $anexo->curso_id =  $request->curso_id;
        $anexo->nombre = $request->nombre;


          if ($request->hasFile('file'))
                    {
                         $anexo->ruta =  $request->file('file')->store('public/anexosCurso/'.$request->curso_id);
                            $anexo->extension = $request->file->getClientOriginalExtension();
                    }
                   $anexo->save();

         return back()->with('success','Se agrego satisfactoriamente un anexo al curso ');
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


            $anexos = Anexo::where('curso_id','=',$id)->get();

            return view('plataforma/Cursos/editAnexo', compact('curso','roles','anexos'));

    }


    public function update(Request $request, $id)
    {

   //
            $curso = Curso::findOrFail($id);
            $curso->curso = $request->curso;
            $curso->duracion = $request->duracion;
            $curso->presentacion = $request->presentacion;
            $curso->obj_general = $request->obj_general;
            $curso->tipo_id = $request->tipo;
            $curso->carrera_id = $request->carrera;
            $curso->activo = $request->estado;
            $curso->perfil_entrada = $request->perfil_entrada;
            $curso->perfil_salida = $request->perfil_salida;
            $curso->save();


            //
            return redirect()->route('curso.index');
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
