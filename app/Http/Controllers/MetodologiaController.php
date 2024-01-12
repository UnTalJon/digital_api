<?php

namespace App\Http\Controllers;

use App\Models\Metodologia;
use App\Http\Requests\StoreMetodologiaRequest;
use App\Http\Requests\UpdateMetodologiaRequest;

class MetodologiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Metodologia::all();
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
    public function store(StoreMetodologiaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Metodologia $metodologia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Metodologia $metodologia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMetodologiaRequest $request, Metodologia $metodologia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Metodologia $metodologia)
    {
        //
    }
}
