<?php

namespace App\Http\Controllers;

use App\Models\Funcion;
use App\Http\Requests\StoreFuncionRequest;
use App\Http\Requests\UpdateFuncionRequest;

class FuncionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Funcion::all();
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
    public function store(StoreFuncionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Funcion $funcion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Funcion $funcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFuncionRequest $request, Funcion $funcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Funcion $funcion)
    {
        //
    }
}
