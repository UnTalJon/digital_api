<?php

namespace App\Http\Controllers;

use App\Http\Resources\LenguaResource;
use App\Models\Lengua;
use Illuminate\Http\Request;

class LenguaController extends Controller
{
    public function index()
    {
        return LenguaResource::collection(Lengua::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => ['required'],
        ]);

        return new LenguaResource(Lengua::create($data));
    }

    public function show(Lengua $lengua)
    {
        return new LenguaResource($lengua);
    }

    public function update(Request $request, Lengua $lengua)
    {
        $data = $request->validate([
            'nombre' => ['required'],
        ]);

        $lengua->update($data);

        return new LenguaResource($lengua);
    }

    public function destroy(Lengua $lengua)
    {
        $lengua->delete();

        return response()->json();
    }
}
