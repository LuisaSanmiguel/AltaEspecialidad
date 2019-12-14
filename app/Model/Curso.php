<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //

    public function carreras(){
        return $this->belongsTo('App\Carrera', 'carrera_id');
    }

    public function tipos(){
        return $this->belongsTo('App\Model\Tipo', 'id_tipo');
    }
  
    public function caracteristicas_cursos(){
        return $this->belongsToMany('App\Model\caracteristicas_cursos');
    }      

    public function cursoinscripcion(){
        return $this->belongsToMany('App\Model\CursoInscripcion');
    }

}
