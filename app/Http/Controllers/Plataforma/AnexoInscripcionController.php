<?php

namespace App\Http\Controllers\Plataforma;
use Auth;
use App\Http\Controllers\Controller;
use App\Model\Anexo;
use App\Model\AnexosInscripcions;
use App\Model\Caracteristica;
use App\Model\caracteristicas_cursos;
use App\Model\Carrera;
use Illuminate\Http\Request;
use App\Model\Roles_users;
use App\Model\Rol;
use App\Model\Curso;
use App\Model\FichasUser;
use App\Model\Tipo;
use Illuminate\Support\Facades\DB;

class AnexoInscripcionController extends Controller
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
                       // $curso = Curso::where('id','=',$id)->first();
                       $id_user = Auth::user()->id;

                       $curso = FichasUser::where('fichas_users.id','=', $id)
                       ->join('fichas', 'fichas_users.ficha_id', '=', 'fichas.id')
                       ->join('cursos','fichas.curso_id','=','cursos.id')
                       ->select('fichas_users.*','fichas.*', 'fichas_users.id as inscripcion','cursos.*')
                       ->first();


            //  return $curso;

                    return view('plataforma/Inscripciones/createAnexo', compact('curso'));

    }

    public function store(Request $request)
    {

       // dd($request->file);
        $anexo =  new AnexosInscripcions;
        $anexo->nombre   =  $request->nombre;
        $anexo->tipo     =  'adjunto';
        $anexo->id_fichas_users   =  $request->inscripcion;


          if ($request->hasFile('file'))
                    {
                         $anexo->ruta =  $request->file('file')->store('public/anexosInscripciones/'.$request->inscripcion);
                            $anexo->extension = $request->file->getClientOriginalExtension();
                    }
                   $anexo->save();

         return back()->with('success','Se agrego satisfactoriamente un anexo a sus documentos del curso ');
    }

    public function edit($id)
    {
       //

       $curso = FichasUser::where('fichas_users.id','=', $id)
       ->join('fichas', 'fichas_users.ficha_id', '=', 'fichas.id')
       ->join('cursos','fichas.curso_id','=','cursos.id')
       ->select('fichas_users.*','fichas.*', 'fichas_users.id as inscripcion','cursos.*')
       ->first();

            $id_user = Auth::user()->id;
            $anexos = FichasUser::where('fichas_users.id','=', $id)
            ->join('anexos_inscripcions', 'fichas_users.id', '=', 'anexos_inscripcions.id_fichas_users')
           ->join('fichas', 'fichas_users.ficha_id', '=', 'fichas.id')
           ->join('cursos','fichas.curso_id','=','cursos.id')
            ->select('anexos_inscripcions.*')
            ->get();

// return $anexos;

             return view('plataforma/Inscripciones/editAnexo', compact('curso','anexos'));

    }


    public function update(Request $request, $id)
    {

   //

    }


    public function show($id)
    {

   //


   $curso = FichasUser::where('fichas_users.id','=', $id)
   ->join('fichas', 'fichas_users.ficha_id', '=', 'fichas.id')
   ->join('cursos','fichas.curso_id','=','cursos.id')
   ->join('users','fichas_users.user_id','=','users.id')
   ->select('fichas_users.*','fichas.*', 'fichas_users.id as inscripcion','cursos.*','users.*')
   ->first();


        $anexos = FichasUser::where('fichas_users.id','=', $id)
        ->join('anexos_inscripcions', 'fichas_users.id', '=', 'anexos_inscripcions.id_fichas_users')
       ->join('fichas', 'fichas_users.ficha_id', '=', 'fichas.id')
       ->join('cursos','fichas.curso_id','=','cursos.id')
        ->select('anexos_inscripcions.*')
        ->get();

// return $anexos;

         return view('plataforma/Inscripciones/showAnexo', compact('curso','anexos'));


    }


    public function destroy($id)
    {

   //
   DB::table("anexos")->where('id',$id)->delete();
   return redirect()->back()
                   ->with('success','El anexo ha sido borrado satisfactoriamente');
    }

}
