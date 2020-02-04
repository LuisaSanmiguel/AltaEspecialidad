<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Roles_users extends Model
{
    //

    public function user(){
        return $this->belongsToMany('App\Model\User');
    }   

    public function rol(){
        return $this->belongsToMany('App\Model\Rol');
    }      

    

}
