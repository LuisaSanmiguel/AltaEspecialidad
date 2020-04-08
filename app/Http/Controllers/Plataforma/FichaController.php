<?php

namespace App\Http\Controllers\Plataforma;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Roles_users;
use App\Model\Rol;
use App\Model\Carrera;
use App\Model\Ficha;
use App\Model\Curso;
use App\Model\FichasUser;
use App\Model\Tipo;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id_user = Auth::user()->id;


        $roles = Roles_users::where('users_id', '=', $id_user)
        ->join('roles', 'roles_users.roles_id', '=', 'roles.id')
        ->select('roles.nombre','roles_users.roles_id')
        ->get();
        $fichas = Ficha::all();
        $cursos = Curso::all();
        return view('plataforma/Fichas/index', compact('cursos','fichas','roles'));
    }

    public function fichasCurso($id)
    {
        //

        $fichas = Ficha::where('fichas.curso_id','=',$id)
        ->get();

        $curso = Curso::where('id','=',$id)->first();

        //return $inscritos;
         return view('plataforma/Fichas/curso', compact('curso','fichas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $tipos = Tipo::all();
        $carreras = Carrera::where('activo','=',1)->get();
        $cursos = Curso::where('activo','=',1)->get();

        return view('plataforma/Fichas/create', compact('cursos','tipos','carreras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $curso = Curso::find($request->curso);
        $numero = $curso->ficha->count()+1;
        //$carrera = Curso::select('carrera_id')->where('id','=',$request->curso)->first();

        $ficha = new Ficha();
        $ficha->curso_id = $request->curso;
        $ficha->codigo = 'AE0'.$curso->carrera_id.'0'.$request->curso.'0'.$numero;
        $ficha->modalidad = $request->modalidad;
        $ficha->oferta = $request->oferta;
        $ficha->cuenta = $request->cuenta;
        $ficha->fecha_ini = $request->fecha_ini;
        $ficha->fecha_fin = $request->fecha_fin;
        $ficha->cupo = $request->cupo;
        $ficha->estado = $request->estado;
        $ficha->save();

        $this->activarFicha($curso, $ficha->id, $request->activo);

        return redirect()->route('ficha.index')->with('success','Se creo una nueva ficha');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

       $ficha = Ficha::findOrFail($id);
       //dd($ficha->activo);
       $id_user = Auth::user()->id;


       $roles = Roles_users::where('users_id', '=', $id_user)
       ->join('roles', 'roles_users.roles_id', '=', 'roles.id')
       ->select('roles.nombre','roles_users.roles_id')
       ->get();

       $tipos = Tipo::all();
       $cursos = Curso::all();

       return view('plataforma/Fichas/edit', compact('ficha','cursos','tipos','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $curso = Curso::find($request->curso);
        $numero = $curso->ficha->count()+1;
        //$carrera = Curso::select('carrera_id')->where('id','=',$request->curso)->first();
        $ficha = Ficha::findOrFail($id);
        $ficha->codigo =  'AE0'.$curso->carrera_id.'0'.$request->curso.'0'.$numero;
        $ficha->curso_id = $request->curso;
        $ficha->modalidad = $request->modalidad;
        $ficha->oferta = $request->oferta;
        $ficha->cuenta = $request->cuenta;
        $ficha->fecha_ini = $request->fecha_ini;
        $ficha->fecha_fin = $request->fecha_fin;
        $ficha->cupo = $request->cupo;
        $ficha->estado = $request->estado;
        $ficha->save();

        $this->activarFicha($curso, $ficha->id, $request->activo);

       return redirect()->route('ficha.index')->with('success','Se modifico la información de la ficha');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function inscritos($id){
        $ficha = Ficha::find($id);
        return view('plataforma.Fichas.inscritos', compact('ficha')); 
    }

    public function activarFicha($curso, $ficha_id, $validacion){
        if($validacion == 1){
            $curso->ficha_principal = $ficha_id;
            $curso->save();
        }
    }
}
