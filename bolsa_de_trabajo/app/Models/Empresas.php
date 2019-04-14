<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    public function usuarios(){
        return $this->belongsTo('App\Usuarios');
    }
    public function vacantes(){
        return $this->hasMany('App\Vacantes');
    }
}
