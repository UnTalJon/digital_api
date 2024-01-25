<?php

namespace App\Http\Controllers;

use App\Http\Resources\DiscapacidadResource;
use App\Models\Discapacidad;
use Illuminate\Http\Request;

class DiscapacidadController extends Controller
{
    public function index()
    {
        return DiscapacidadResource::collection(Discapacidad::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => ['required'],
        ]);

        return new DiscapacidadResource(Discapacidad::create($data));
    }

    public function show(Discapacidad $discapacidad)
    {
        return new DiscapacidadResource($discapacidad);
    }

    public function update(Request $request, Discapacidad $discapacidad)
    {
        $data = $request->validate([
            'nombre' => ['required'],
        ]);

        $discapacidad->update($data);

        return new DiscapacidadResource($discapacidad);
    }

    public function destroy(Discapacidad $discapacidad)
    {
        $discapacidad->delete();

        return response()->json();
    }
}
