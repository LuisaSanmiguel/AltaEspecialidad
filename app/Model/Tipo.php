<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    //
    protected $fillable =['id','nombre'];

    public function cursos(){
        return $this->hasMany('App\Model\Curso');
    }
}
