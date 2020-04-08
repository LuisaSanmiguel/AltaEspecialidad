<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function inscripcion()
    {
        return $this->hasOne('App\Model\FichasUser');
    }

    public function Rol(){
        return $this->hasOne('App\Model\Roles_users','users_id');
    }

    public function usersFicha()
    {
       return $this->hasMany(FichasUser::class);
    }

    public function ciudad(){
        return $this->belongsTo('App\Model\Ciudad');
    } 

     public function Roles(){
        return $this->hasMany('App\Model\Roles_users','users_id');
    }

    ///functiones
    public function getIsAdminAttribute(){
       // $roles = Roles_users::where('users_id', $this->id)->where('roles_id', 1)->get();
        if($this->roles->where('roles_id', 1)->count() > 0){
            return true;
        }else{
            return false;
        }
    }
}
