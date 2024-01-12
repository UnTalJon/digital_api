<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use App\Http\Requests\StoreBitacoraRequest;
use App\Http\Requests\UpdateBitacoraRequest;

class BitacoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Bitacora::all();
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
    public function store(StoreBitacoraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bitacora $bitacora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bitacora $bitacora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBitacoraRequest $request, Bitacora $bitacora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bitacora $bitacora)
    {
        //
    }
}
