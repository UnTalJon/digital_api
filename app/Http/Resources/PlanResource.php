<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlanResource extends JsonResource
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
            'busquedaID' => $this->busqueda_id,
            'contenido' => $this->contenido,
            'bitacoras' => BitacoraResource::collection($this->whenLoaded('bitacoras')),
            'imagenes' => ImagenResource::collection($this->whenLoaded('imagenes')),
        ];
    }
}
