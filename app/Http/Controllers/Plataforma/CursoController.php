<?php

namespace App\Http\Controllers\Plataforma;
use Auth;
use App\Http\Controllers\Controller;
use App\Model\Carrera;
use Illuminate\Http\Request;
use App\Model\Roles_users;
use App\Model\Rol;
use App\Model\Curso;
use App\Model\Tipo;

class CursoController extends Controller
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

        return view('plataforma/Cursos/Index', compact('cursos','roles')); 
    
    }


    public function create()
    {   
        
        $id_user = Auth::user()->id;


        $roles = Roles_users::where('users_id', '=', $id_user)
        ->join('roles', 'roles_users.roles_id', '=', 'roles.id')
        ->select('roles.nombre','roles_users.roles_id')
        ->get();

        $tipos = Tipo::all();
        $carreras = Carrera::where('activo','=',1)->get();
      
        return view('plataforma/Cursos/create', compact('roles','tipos','carreras')); 
    
    }

    public function store(Request $request)
    {   
        
   //
           
         $curso = new Curso();
         $curso->curso = $request->curso;
         $curso->duracion = $request->duracion;
         $curso->presentacion = $request->presentacion;
         $curso->obj_general = $request->obj_general;
         $curso->tipo_id = $request->tipo;
         $curso->carrera_id = $request->carrera;
         $curso->activo = 1;
         $curso->perfil_entrada = $request->perfil_entrada;
         $curso->perfil_salida = $request->perfil_salida;
         $curso->save();


        //
        return redirect()->route('curso');
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

            $tipos = Tipo::all();
            $carreras = Carrera::where('activo','=',1)->get();

            return view('plataforma/Cursos/edit', compact('curso','roles','tipos','carreras')); 
    
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
