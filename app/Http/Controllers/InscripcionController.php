<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscripcion;
use App\Curso;
use App\User;
use App\Departamento;
use App\Ciudad;
use App\CursoInscripcion;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Auth;

class InscripcionController extends Controller
{

	public function inscripcionForm($id){
    $departamentos = Departamento::all();
         $cursos = Curso::where('id','=',$id)->get();

		return view('auth.register', compact('cursos', 'departamentos'));
	}

    public function inscripcionSave(Request $request){

        
        $usuario = User::where('email','=',$request->email)->get();

        if($usuario->count() > 0 )
        {
        	return 'existen '.$usuario->count();
        }   
        else{
        //creacion del usuario
    	$user = new User;
        $user->name = $request->name;
    	$user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        }
    	// creacion de inscripcion
    	$inscripcion = new Inscripcion;
    	$inscripcion->direccion = $request->direccion;
    	$inscripcion->telefono = $request->telefono;
        $inscripcion->ciudad_id = $request->ciudad;
    	$inscripcion->typeDoc = $request->typeDoc;
    	$inscripcion->numDc = $request->numDc;
        $inscripcion->user_id = $user->id;

    	$inscripcion->save();

        //creacion del curso
        $curso =  new CursoInscripcion;
        $curso->curso_id = $request->cursos;

        $curso->inscripcion_id = $inscripcion->id;
        $curso->save();

        if($curso){
            Auth::login($user);
            Mail::to($user->email)->send(new WelcomeMail($user));
    	   return redirect('/home');
        } else{
           return redirect('/');
        }   

    }

    public function ciudades($departamento){
        $ciudades = Ciudad::where('departamento_id', $departamento)->select('id','nombre')->get();
        return response()->json($ciudades);
    }
}
