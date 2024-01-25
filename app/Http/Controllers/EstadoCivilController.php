<?php

namespace App\Http\Controllers;

use App\Http\Resources\EstadoCivilResource;
use App\Models\EstadoCivil;
use Illuminate\Http\Request;

class EstadoCivilController extends Controller
{
    public function index()
    {
        return EstadoCivilResource::collection(EstadoCivil::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => ['required'],
        ]);

        return new EstadoCivilResource(EstadoCivil::create($data));
    }

    public function show(EstadoCivil $estadoCivil)
    {
        return new EstadoCivilResource($estadoCivil);
    }

    public function update(Request $request, EstadoCivil $estadoCivil)
    {
        $data = $request->validate([
            'nombre' => ['required'],
        ]);

        $estadoCivil->update($data);

        return new EstadoCivilResource($estadoCivil);
    }

    public function destroy(EstadoCivil $estadoCivil)
    {
        $estadoCivil->delete();

        return response()->json();
    }
}
