<?php

namespace App\Http\Controllers;

use App\Http\Resources\MinoriaResource;
use App\Models\Minoria;
use Illuminate\Http\Request;

class MinoriaController extends Controller
{
    public function index()
    {
        return MinoriaResource::collection(Minoria::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => ['required'],
        ]);

        return new MinoriaResource(Minoria::create($data));
    }

    public function show(Minoria $minoria)
    {
        return new MinoriaResource($minoria);
    }

    public function update(Request $request, Minoria $minoria)
    {
        $data = $request->validate([
            'nombre' => ['required'],
        ]);

        $minoria->update($data);

        return new MinoriaResource($minoria);
    }

    public function destroy(Minoria $minoria)
    {
        $minoria->delete();

        return response()->json();
    }
}
