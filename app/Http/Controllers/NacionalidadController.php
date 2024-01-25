<?php

namespace App\Http\Controllers;

use App\Http\Resources\NacionalidadResource;
use App\Models\Nacionalidad;
use Illuminate\Http\Request;

class NacionalidadController extends Controller
{
    public function index()
    {
        return NacionalidadResource::collection(Nacionalidad::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => ['required'],
        ]);

        return new NacionalidadResource(Nacionalidad::create($data));
    }

    public function show(Nacionalidad $nacionalidad)
    {
        return new NacionalidadResource($nacionalidad);
    }

    public function update(Request $request, Nacionalidad $nacionalidad)
    {
        $data = $request->validate([
            'nombre' => ['required'],
        ]);

        $nacionalidad->update($data);

        return new NacionalidadResource($nacionalidad);
    }

    public function destroy(Nacionalidad $nacionalidad)
    {
        $nacionalidad->delete();

        return response()->json();
    }
}
