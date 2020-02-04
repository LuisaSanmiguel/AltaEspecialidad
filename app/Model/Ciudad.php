<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudades';

    protected $fillable = ['nombre', 'departamento_id'];


    public function inscripcion()
    {
        return $this->belongsToMany('App\Model\Inscripcion');
    }

    public function departamento()
    {
        return $this->belongsTo('App\Model\Departamento');
    }

}
