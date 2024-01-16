<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metodologia extends Model
{
    use HasFactory;

    /**
     * The table associated with the model
     * 
     * @var string
     */
    protected $table = 'metodologias';

    /**
     * Get the busqueda that owns the metodologia.
     */
    public function busqueda() {
        return $this->belongsTo(Busqueda::class);
    }

    /**
     * Get the bitacoras for the metodologia.
     */
    public function bitacoras() {
        return $this->belongsToMany(Bitacora::class);
    }

    /**
     * The imagenes that belongs to the metodologia.
     */
    public function imagenes() {
        return $this->belongsToMany(Imagen::class);
    }
}
