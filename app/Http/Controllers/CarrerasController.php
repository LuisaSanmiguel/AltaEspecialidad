<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carrera;
class CarrerasController extends Controller
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

        return view('paginasInicio/Carreras', compact('carreras')); 
    
    }
    
}
