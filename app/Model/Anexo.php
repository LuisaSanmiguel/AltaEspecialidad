<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Anexo extends Model
{
    //


    protected $fillable = ['curso_id','nombre','ruta','extension'];


    public function cursos(){
        return $this->belongsTo('App\Model\Curso');
    }



}
