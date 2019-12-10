<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    //

 
    public function caracteristicas_cursos(){
        return $this->belongsToMany('App\caracteristicas_cursos');
    }

    
}
