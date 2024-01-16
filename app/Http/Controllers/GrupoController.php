<?php

namespace App\Http\Controllers;

use App\Models\Grupo as Model;
use App\Http\Requests\StoreGrupoRequest as StoreRequest;
use App\Http\Requests\UpdateGrupoRequest as UpdateRequest;
use Illuminate\Http\Request;
use App\Http\Resources\GrupoResource as Resource;
use App\Http\Resources\GrupoCollection as Collection;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new Collection(Model::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Int $id)
    {
        $model = Model::findOrFail($id);
        return new Resource($model);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Model $model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Model $model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Model $model)
    {
        //
    }
}
