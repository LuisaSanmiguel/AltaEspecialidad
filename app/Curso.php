<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //

    public function carreras(){
        return $this->belongsTo('App\Carrera', 'carrera_id');
    }

    public function tipos(){
        return $this->belongsTo('App\Tipo', 'id_tipo');
    }
  
    public function caracteristicas_cursos(){
        return $this->belongsToMany('App\caracteristicas_cursos');
    }      


}
