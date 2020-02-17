<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    // id, codigo, modalidad, oferta, fecha_ini, fecha_fin, cupo


protected $fillable = ['id', 'codigo', 'modalidad', 'oferta', 'fecha_ini', 'fecha_fin', 'cupo','estado','curso_id'];

public function curso(){
    return $this->belongsTo('App\Model\Curso');
}


}
