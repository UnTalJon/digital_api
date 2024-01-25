<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReligionResource;
use App\Models\Religion;
use Illuminate\Http\Request;

class ReligionController extends Controller
{
    public function index()
    {
        return ReligionResource::collection(Religion::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => ['required'],
        ]);

        return new ReligionResource(Religion::create($data));
    }

    public function show(Religion $religion)
    {
        return new ReligionResource($religion);
    }

    public function update(Request $request, Religion $religion)
    {
        $data = $request->validate([
            'nombre' => ['required'],
        ]);

        $religion->update($data);

        return new ReligionResource($religion);
    }

    public function destroy(Religion $religion)
    {
        $religion->delete();

        return response()->json();
    }
}
