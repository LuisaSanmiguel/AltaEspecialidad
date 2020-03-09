<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    //


    protected $fillable = ['nombre','activo','costo']; 


    public function cursos(){
        return $this->hasMany('App\Model\Curso');
    }


    
}
