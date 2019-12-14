<?php

namespace App\Http\Controllers\PaginaInicio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Carrera;
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

        return view('paginaInicio/Carreras', compact('carreras')); 
    
    }
    
}
