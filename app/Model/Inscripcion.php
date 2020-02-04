<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    //

    public function user(){
        return $this->belongsToMany('App\Model\User');
    }   

    public function curso(){
        return $this->belongsToMany('App\Model\Curso');
    }      

    public function cursoinscripcion(){
        return $this->belongsToMany('App\Model\CursoInscripcion');
    }   

}
