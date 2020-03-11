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
use Illuminate\Support\Facades\DB;

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

        foreach($request->ids as $i)
        {
            $nombre='carac_'.$i;
        // echo $id.' ';
                $caracteristica = caracteristicas_cursos::findOrFail($i);
                $caracteristica ->contenido = $request->$nombre ;
                $caracteristica->save();

        // return $request->$nombre;
         }

       return redirect()->route('cursoCarac.edit',$id)->with('success','Las características del curso, se modificaron correctamente');
    }


    public function show($id)
    {

   //


    }


    public function destroy($id)
    {

   //
   DB::table("caracteristicas_cursos")->where('id',$id)->delete();
   return redirect()->back()
                   ->with('success','La característica ha sido borrada Satisfactoriamente');
    }

}
