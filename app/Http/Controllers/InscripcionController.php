<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Inscripcion;
use App\Model\Curso;
use App\User;
use App\Model\Departamento;
use App\Model\Ciudad;
use App\Model\CursoInscripcion;
use App\Mail\WelcomeMail;
use App\Model\Roles_users;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Auth;

class InscripcionController extends Controller
{

	public function inscripcionForm($id){


    $departamentos = Departamento::all();
         $cursos = Curso::where('id','=',$id)->get();
         if (Auth::check()) {
            // The user is logged in...

            $id_user = Auth::user()->id;

         
            $roles = Roles_users::where('users_id', '=', $id_user)
            ->join('roles', 'roles_users.roles_id', '=', 'roles.id')
            ->select('roles.nombre','roles_users.roles_id')
            ->get();

            return view('auth.register', compact('cursos', 'departamentos','roles'));
                        
        }
        else{
        return view('auth.register', compact('cursos', 'departamentos'));
        }
	}

    public function inscripcionSave(Request $request){

        
        $usuario = User::where('email','=',$request->email)->get();

             
           if($usuario->isNotEmpty())
                {   
                    $usuario = User::where('email','=',$request->email)->first();
                    $usr= $usuario->id;
                    $user = User::find($usr);
                }   

            else{
            //creacion del usuario
                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->save();
                $usr= $user->id;

                $roles_users = new Roles_users;
                $roles_users->roles_id = '2';
                $roles_users->users_id = $usr;
                $roles_users->save();
               


            }
        

    	// creacion de inscripcion
    	$inscripcion = new Inscripcion;
    	$inscripcion->direccion = $request->direccion;
    	$inscripcion->telefono = $request->telefono;
        $inscripcion->ciudad_id = $request->ciudad;
    	$inscripcion->typeDoc = $request->typeDoc;
    	$inscripcion->numDc = $request->numDc;
        $inscripcion->user_id = $usr;

    	$inscripcion->save();

        //creacion del curso
        $curso =  new CursoInscripcion;
        $curso->curso_id = $request->cursos;

        $curso->inscripcion_id = $inscripcion->id;
        $curso->save();


        if($curso){
            // Auth::login($user);
            // Mail::to($user->email)->send(new WelcomeMail($user));
    	   return redirect('/homeCursos');
        } else{
           return redirect('/');
        }   

    }

    public function ciudades($departamento){
        $ciudades = Ciudad::where('departamento_id', $departamento)->select('id','nombre')->get();
        return response()->json($ciudades);
    }
}
