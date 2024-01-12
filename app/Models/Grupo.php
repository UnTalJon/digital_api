<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    /**
     * Get the funcion that owns the grupo.
     */
    public function funcion() {
        return $this->belongsTo(Funcion::class);
    }

    /**
     * The busquedas that belongs to the grupo.
     */
    public function busquedas() {
        return $this->belongsToMany(Busqueda::clas);
    }
}
