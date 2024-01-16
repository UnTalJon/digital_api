<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Persona;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function() {
    Route::apiResource('estados', EstadoController::class);
    Route::apiResource('municipios', MunicipioController::class);
    Route::apiResource('categorias', CategoriaController::class);
    Route::apiResource('fases', FaseController::class);
    Route::apiResource('funciones', FuncionController::class);
    Route::apiResource('grupos', GrupoController::class);
    Route::apiResource('personas', PersonaController::class);
    Route::apiResource('busquedas', BusquedaController::class);
    Route::apiResource('particularidades', ParticularidadController::class);
    Route::apiResource('metodologias', MetodologiaController::class);
    Route::apiResource('planes', PlanController::class);
    Route::apiResource('bitacoras', BitacoraController::class);
    Route::get('planes{plan}','PlanController@show');
    Route::apiResource('imagenes', ImagenController::class);
});
