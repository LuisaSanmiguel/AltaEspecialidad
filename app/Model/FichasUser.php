<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FichasUser extends Model
{
    //

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function curso(){
        return $this->belongsToMany('App\Model\Curso');
    }

    public function fichas(){
        return $this->belongsTo('App\Model\Ficha', 'ficha_id');
    }
}
