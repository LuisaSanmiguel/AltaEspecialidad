<?php

namespace App\Http\Controllers\Plataforma;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Model\Carrera;

class EscuelaController extends Controller
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
          
        $carreras = Carrera::all();

        return view('plataforma\Escuelas\EscuelaIndex', compact('carreras')); 
    
    }
    
}
