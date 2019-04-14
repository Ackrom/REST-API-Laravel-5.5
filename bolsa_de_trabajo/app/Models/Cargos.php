<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargos extends Model
{
    public function vacantes(){
        return $this->belongsToMany('App\Vacantes','vacantes_cargos');
    }
}
