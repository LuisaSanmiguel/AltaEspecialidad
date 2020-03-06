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
        $this->middleware('user')->except('index','show');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $carreras = Carrera::all();

        return view('plataforma/Escuelas/Index', compact('carreras'));

    }
    public function create()
    {

        return view('plataforma/Escuelas/create');

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

        $carrera = Carrera::where('id','=',$id)->first();
   //
   return view('plataforma/Escuelas/edit', compact('carrera'));

    }

    public function update(Request $request, $id)
    {

            $escuela = Carrera::findOrFail($id);
            $escuela->nombre = $request->nombre;
            $escuela->activo = $request->estado;
            $escuela->costo = $request->costo;
            $escuela->save();

            return redirect()->route('escuela')->with('success','Se modificarón los datos de la escuela');;
    }

    public function destroy()
    {

   //

    }

}
