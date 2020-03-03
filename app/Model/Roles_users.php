<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Roles_users extends Model
{
    //
    protected $fillable = [
        'id', 'roles_id', 'users_id',
     ];
    public function user(){
        return $this->belongsToMany('App\Model\User');
    }

    public function rol(){
        return $this->belongsToMany('App\Model\Rol');
    }



}
