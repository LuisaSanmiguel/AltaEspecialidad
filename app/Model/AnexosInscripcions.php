<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AnexosInscripcions extends Model
{
    //


    protected $fillable = ['id','nombre','tipo','ruta','extension','id_fichas_users'];


    public function fichasUsers(){
        return $this->belongsTo('App\Model\FichasUser');
    }



}
