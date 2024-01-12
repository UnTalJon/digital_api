<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    /**
     * Get the busquedas for the categoria.
     */
    public function busquedas() {
        return $this->hasMany(Busqueda::class);
    }
}
