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
use App\Model\FichasUser;
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

 if (Auth::check()){
      $usr = Auth::user()->id;
}
 else{
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
                $user->direccion = $request->direccion;
                $user->telefono = $request->telefono;
                $user->ciudad_id = $request->ciudad;
                $user->typeDoc = $request->typeDoc;
                $user->numDc = $request->numDc;
                $user->password = Hash::make($request->password);
                $user->save();
                $usr= $user->id;

                $roles_users = new Roles_users;
                $roles_users->roles_id = '2';
                $roles_users->users_id = $usr;
                $roles_users->save();



             }
        }

    	// creacion de inscripcion
    	$inscripcion = new FichasUser;
        $inscripcion->user_id = $usr;
        $inscripcion->ficha_id =  0;
        $inscripcion->curso_id =  $request->cursos;
        $inscripcion->estado =  'inscrito';
        $inscripcion->activo =  0;

    	$inscripcion->save();




        if($inscripcion){
            // Auth::login($user);
            // Mail::to($user->email)->send(new WelcomeMail($user));

    	   return redirect('/homeCursos')->with('success','Se inscribio exitosamente al curso ');
        } else{
           return redirect('/');
        }

    }

    public function ciudades($departamento){
        $ciudades = Ciudad::where('departamento_id', $departamento)->select('id','nombre')->get();
        return response()->json($ciudades);
    }
}
