<?php

namespace App\Http\Controllers\PaginaInicio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Roles_users;

class TeamController extends Controller
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


        if (Auth::check()) {
            // The user is logged in...

            $id_user = Auth::user()->id;

         
            $roles = Roles_users::where('users_id', '=', $id_user)
            ->join('roles', 'roles_users.roles_id', '=', 'roles.id')
            ->select('roles.nombre','roles_users.roles_id')
            ->get();

            return view('/paginaInicio/team', compact('roles'));
                        
        }
        else{
        return view('/paginaInicio/team');

        }
    }
}
