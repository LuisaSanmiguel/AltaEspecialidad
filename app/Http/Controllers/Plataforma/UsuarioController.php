<?php

namespace App\Http\Controllers\Plataforma;

use App\Http\Controllers\Controller;

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
          
        $users = User::all();

        return view('plataforma\Usuarios\UsuariosIndex', compact('users')); 
    
    }
    
}
