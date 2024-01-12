<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Busqueda;
use App\Http\Requests\StoreBusquedaRequest;
use App\Http\Requests\UpdateBusquedaRequest;
use App\Http\Resources\BusquedaCollection;
use App\Filters\BusquedaFilter;

class BusquedaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new BusquedaFilter();
        $queryItems = $filter->transform($request);
        $include = $request->query('include');
        $busquedas = Busqueda::where($queryItems);

        if($include) {
            $busquedas = $busquedas->with('personas');
        }

        return new BusquedaCollection($busquedas->get()->append($request->query()));
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
    public function store(StoreBusquedaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Busqueda $busqueda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Busqueda $busqueda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBusquedaRequest $request, Busqueda $busqueda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Busqueda $busqueda)
    {
        //
    }
}
