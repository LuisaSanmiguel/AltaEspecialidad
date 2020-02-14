<?php

namespace App\Http\Controllers\Plataforma;
use Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Model\Roles_users;
use App\Model\Rol;
use App\Model\Carrera;

class EscuelaController extends Controller
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
          
        $carreras = Carrera::all();

        return view('plataforma/Escuelas/Index', compact('carreras','roles')); 
    
    }
    public function create()
    {   
        $id_user = Auth::user()->id;


        $roles = Roles_users::where('users_id', '=', $id_user)
        ->join('roles', 'roles_users.roles_id', '=', 'roles.id')
        ->select('roles.nombre','roles_users.roles_id')
        ->get();
      

        return view('plataforma/Escuelas/create', compact('roles')); 
    
    }

    public function store(Request $request)
    {   
        
        
         $escuela = new Carrera();
         $escuela->nombre = $request->nombre;
         $escuela->activo = 1;
         $escuela->costo = $request->costo;
         $escuela->save();
   //
     return redirect()->route('escuela.index')->with('success','Se creo una nueva escuela');
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
