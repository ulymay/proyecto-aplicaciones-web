<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $fillable = [
        'nombre', 'modelo', 'color', 'dueno', 'placa', 'marca',
    ];

    function duenocarro(){
        return $this->belongsTo(Dueno::class, 'dueno_id', 'id');
    }
}

