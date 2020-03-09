<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //

    protected $fillable = ['curso','curso','fecha_ini','presentacion', 'obj_general' ,'tipo_id' ,'carrera_id' ,'activo' ,'perfil_entrada' ,'perfil_salida'];

    public function carrera(){
        return $this->belongsTo('App\Model\Carrera');
    }

    public function tipos(){
        return $this->belongsTo('App\Model\Tipo', 'tipo_id');
    }

    public function caracteristicas_cursos(){
        return $this->belongsToMany('App\Model\caracteristicas_cursos');
    }

    public function fichaUser(){
        return $this->belongsToMany('App\Model\fichasUser');
    }

    public function ficha(){
        return $this->HasMany('App\Model\Ficha');
    }
    public function Anexos(){
        return $this->HasMany('App\Model\Anexo');
    }
}
