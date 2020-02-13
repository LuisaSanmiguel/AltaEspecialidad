<?php

namespace App\Http\Controllers\Plataforma;
use Auth;
use App\Http\Controllers\Controller;
use App\Model\Roles_users;
use App\Model\Rol;
use Illuminate\Http\Request;

use App\User;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

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

        $users = User::join('roles_users', 'users.id', '=', 'roles_users.users_id')
        ->join('roles', 'roles_users.roles_id', '=', 'roles.id')
        ->select('users.*','roles.nombre','roles_users.roles_id')
        ->get();

    //   return $users;

        return view('plataforma/Usuarios/Index', compact('users','roles')); 
    
    }
    
}
