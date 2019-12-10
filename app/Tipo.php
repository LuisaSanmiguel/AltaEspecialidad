<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    //

    public function cursos(){
        return $this->hasMany('App\Curso');
    }
}
