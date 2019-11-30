<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    //
    protected $fillable = ['nombre'];

    public function medicos()
    {
        return $this->hasMany('App\Medico');
    }
    public function enfermedads(){
        return $this->hasMany('App\Enfermedad');
    }
}

