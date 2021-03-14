<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Usuario extends Model
{
    use HasFactory;


// Relacion uno a uno 
    public function solicitud(){
        return $this->hasOne('App\Models\Solicitude');
    }
}
