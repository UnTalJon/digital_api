<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    /**
     * Get the estado that owns the municipio.
     */
    public function estado() {
        return $this->belongsTo(Estado::class);
    }

    /**
     * Get the busquedas for the estado.
     */
    public function busquedas() {
        return $this->hasMany(Busqueda::class);
    }
}
