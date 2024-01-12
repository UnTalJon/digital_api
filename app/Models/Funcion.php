<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    use HasFactory;

    /**
     * Get the grupos for the funcion.
     */
    public function grupos() {
        return $this->hasMany(Grupo::class);
    }
}
