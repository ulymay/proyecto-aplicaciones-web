<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dueno extends Model
{
    //
    function carro(){
        return $this->hasOne(Carro::class);
    }
    
}


