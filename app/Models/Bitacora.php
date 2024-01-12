<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenido'
    ];


    /**
     * Get the imagenes for the bitacora.
     */
    public function imagenes() {
        return $this->belongsToMany(Imagen::class);
    }

    /**
     * Get the particulatidad that owns the bitacora.
     */
    public function particularidad() {
        return $this->belongsToMany(Particularidad::class);
    }

    /**
     * The metodologia that belongs to the bitacora.
     */
    public function metodologias() {
        return $this->belongsToMany(Metodologia::class);
    }

    /**
     * The planes de busqueda that belongs to the bitacora.
     */
    public function planes() {
        return $this->belongsToMany(Plan::class);
    }
}
