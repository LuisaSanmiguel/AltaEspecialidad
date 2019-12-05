<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscripcion;
use App\Curso;
use App\Departamento;
use App\Ciudad;
use App\User;
use App\CursoInscripcion;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;


class InscripcionController extends Controller
{

	public function inscripcionForm(){
        $departamentos = Departamento::all();
		$cursos = Curso::all();
		return view('inicio', compact('cursos', 'departamentos'));
	}

    public function inscripcionSave(Request $request){
        //creacion del usuario
		$user = new User();
		$user->id = $request->id;
    	$user->name = $request->name;
    	$user->email = $request->email;
        $user->password = ($request->password);
        $user->save();

    	// creacion de inscripcion
    	$inscripcion = new Inscripcion;
    	$inscripcion->direccion = $request->direccion;
    	$inscripcion->telefono = $request->telefono;
        $inscripcion->ciudad_id = $request->ciudad;
    	$inscripcion->typeDoc = $request->typeDoc;
    	$inscripcion->numDc = $request->id;
        $inscripcion->user_id = $request->id;
    	$inscripcion->save();

        //creacion del curso
        $curso =  new CursoInscripcion;
        $curso->curso_id = $request->curso;
        $curso->inscripcion_id = $inscripcion->id;
        $curso->save();

        if($curso){
            // Auth::login($authUser, true);
			// Mail::to($inscripcion->email)->send(new WelcomeMail($inscripcion));
		
    	   return redirect('/virtual');
        } else{
           return redirect('/');
        }   

    }

    public function ciudades($departamento){
        $ciudades = Ciudad::where('departamento_id', $departamento)->select('id','nombre')->get();
        return response()->json($ciudades);
    }
}