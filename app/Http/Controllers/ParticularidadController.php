<?php

namespace App\Http\Controllers;

use App\Models\Particularidad;
use App\Http\Requests\StoreParticularidadRequest;
use App\Http\Requests\UpdateParticularidadRequest;

class ParticularidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Particularidad::all();
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
    public function store(StoreParticularidadRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Particularidad $particularidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Particularidad $particularidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParticularidadRequest $request, Particularidad $particularidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Particularidad $particularidad)
    {
        //
    }
}
