<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HojaDeVida extends Model
{
    protected $table = 'hv';
    public $timestamps = false;

    protected $fillable = ['ruta'];

    public function curso(){
    	return $this->hasOne('App\Model\Curso', 'hv_id');
    }

    public function getFileAttribute(){
    	return \Storage::url($this->ruta);
    }

    public function getNameFileAttribute(){
    	$array = explode('/' ,$this->ruta);
    	return $array[3];
    }
}
