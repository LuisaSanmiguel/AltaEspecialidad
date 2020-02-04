<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    //

 
    public function caracteristicas_cursos(){
        return $this->belongsToMany('App\Model\caracteristicas_cursos');
    }

    
}
