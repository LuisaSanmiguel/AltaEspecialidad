<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FichasUser extends Model
{
    //

    public function users(){
        return $this->belongsToMany('App\Model\User');
    }

    public function curso(){
        return $this->belongsToMany('App\Model\Curso');
    }

    // public function cursoinscripcion(){
    //     return $this->belongsToMany('App\Model\CursoInscripcion');
    // }

}
