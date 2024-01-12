<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fase extends Model
{
    use HasFactory;

    /**
     * Get the busquedas for the fase.
     */
    public function busquedas() {
        return $this->hasMany(Busqueda::class);
    }
}
