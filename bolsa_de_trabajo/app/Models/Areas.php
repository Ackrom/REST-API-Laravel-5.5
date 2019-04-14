<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    public function vacantes(){
        return $this->belongsToMany('App\Vacantes','vacantes_areas');
    }
}
