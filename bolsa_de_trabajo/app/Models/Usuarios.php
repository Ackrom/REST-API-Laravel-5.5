<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuarios extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function vacantes(){
        return $this->belongsToMany('App\Vacantes','postulaciones')->withTimestamps();
    }
    public function empresas(){
        return $this->hasMany('App\Empresas');
    }
    public function curriculums(){
        return $this->hasMany('App\Curriculums');
    }
}
