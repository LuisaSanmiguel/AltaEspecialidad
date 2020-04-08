<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\HojaDeVida;

class HojaVidaController extends Controller
{
    public function index(){
    	$hvs = HojaDeVida::all();
    	return view('plataforma.hv.index', compact('hvs'));
    }

    public function store(Request $request){
    	$ruta = $this->rutaUser('hv');
    	$hv = new HojaDeVida;
    	$hv->ruta = $this->uploadFile($request->hv, $ruta);
    	$hv->save();

    	return back();
    }

    public function update(Request $request, $id){
    	$ruta = $this->rutaUser('hv');
    	$hv = HojaDeVida::find($id);
    	$hv->ruta = $this->uploadFile($request->hv, $ruta, $hv->ruta);
    	$hv->save();

    	return back();
    }

    public function uploadFile($file, $newRuta, $oldRuta = ''){
        if($this->existsFile($oldRuta)){
            $this->deleteFile($oldRuta);
        }
        return $file->storeAs('public/'.$newRuta, $file->getclientoriginalname() );
    }

    public function existsFile($ruta){
        return Storage::exists($ruta);
    }

    public function deleteFile($ruta){
        if($this->existsFile($ruta))
            Storage::delete($ruta);
    }

    public function rutaUser($carpeta){
        return \Auth::user()->id.'/'.$carpeta;
    }
}
