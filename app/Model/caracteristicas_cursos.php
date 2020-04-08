<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class caracteristicas_cursos extends Model
{
    //
    public function Curso(){
        return $this->belongsToMany('App\Model\Curso');
    }
    
    public function Caracteristica(){
        return $this->belongsTo('App\Model\Caracteristica');
    }

    
}
