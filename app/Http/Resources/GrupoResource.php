<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Funcion;

class GrupoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'representante' => $this->representante,
            'funcion' => $this->funcion_id,
            //'funcion' => new FuncionResource(Funcion::findOrFail($this->funcion_id)),
        ];
    }
}
