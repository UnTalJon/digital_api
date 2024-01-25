<?php

namespace App\Http\Controllers;

use App\Http\Requests\SexoRequest;
use App\Http\Resources\SexoResource;
use App\Models\Sexo;

class SexoController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Sexo::class);

        return SexoResource::collection(Sexo::all());
    }

    public function store(SexoRequest $request)
    {
        $this->authorize('create', Sexo::class);

        return new SexoResource(Sexo::create($request->validated()));
    }

    public function show(Sexo $sexo)
    {
        $this->authorize('view', $sexo);

        return new SexoResource($sexo);
    }

    public function update(SexoRequest $request, Sexo $sexo)
    {
        $this->authorize('update', $sexo);

        $sexo->update($request->validated());

        return new SexoResource($sexo);
    }

    public function destroy(Sexo $sexo)
    {
        $this->authorize('delete', $sexo);

        $sexo->delete();

        return response()->json();
    }
}
