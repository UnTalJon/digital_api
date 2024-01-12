<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    /**
     * The busquedas that belongs to the persona.
     */
    public function busquedas() {
        return $this->belongsToMany(Busqueda::class);
    }
}
