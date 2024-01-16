<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BusquedaResource extends JsonResource
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
            'categoriaId' => $this->categoria_id,
            'faseId' => $this->fase_id,
            'fechaCreacion' => $this->fecha_creacion,
            'lugarCreacion' => $this->lugar_creacion,
            'fechaInicial' => $this->fecha_inicial,
            'fechaFinal' => $this->fecha_final,
            'coordenadas' => $this->coordenadas,
            'localidad' => $this->localidad,
            'lugarComision' => $this->lugar_comision,
            'extension' => $this->extension_comision,
            'consideracionesFinales' => $this->consideraciones_finales,
            'personas' => PersonaResource::collection($this->whenLoaded('personas')),
            'grupos' => GrupoResource::collection($this->whenLoaded('grupos')),
            'particularidad' => ParticularidadResource::make($this->whenLoaded('particularidad')),
            'metodologia' => MetodologiaResource::make($this->whenLoaded('metodologia')),
            'plan' => PlanResource::make($this->whenLoaded('plan')),
        ];
    }
}
