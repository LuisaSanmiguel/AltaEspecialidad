<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class caracteristicas_cursos extends Model
{
    //

 
    public function Curso(){
        return $this->belongsToMany('App\Curso');
    }
    
    public function Caracteristica(){
        return $this->belongsToMany('App\Caracteristica');
    }

    
}
