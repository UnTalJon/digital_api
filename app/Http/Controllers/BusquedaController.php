<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Busqueda as Model;
use App\Http\Requests\StoreBusquedaRequest as StoreRequest;
use App\Http\Requests\UpdateBusquedaRequest as UpdateRequest;
use App\Http\Resources\BusquedaResource as Resource;

class BusquedaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Model::with('personas', 'grupos')->get();

        return Resource::collection($model);
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
    public function show($id)
    {
        $model = Model::with('personas', 'grupos', 'particularidad', 'metodologia', 'plan');
        $response = $model->findOrFail($id);

        return new Resource($response);
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
