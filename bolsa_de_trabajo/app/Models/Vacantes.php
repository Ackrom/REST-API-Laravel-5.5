<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacantes extends Model
{
    public function usuarios(){
        return $this->belongsToMany('App\Usuarios','postulaciones')->withTimestamps();
    }
    public function cargos(){
        return $this->belongsToMany('App\Cargos','vacantes_cargos');
    }
    public function areas(){
        return $this->belongsToMany('App\Areas','vacantes_areas');
    }
    public function empresas(){
        return $this->belongsTo('App\Empresas');
    }
}
