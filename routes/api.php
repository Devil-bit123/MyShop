<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProvinciaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para los empleados
Route::prefix('empleados')->group(function () {
    // Obtener la lista de empleados
    Route::get('/', [EmpleadoController::class, 'index']);

    Route::get('/export/', [EmpleadoController::class, 'export']);

    // Crear un nuevo empleado
    Route::post('/', [EmpleadoController::class, 'store']);

    // Obtener un empleado específico
    Route::get('/{id}', [EmpleadoController::class, 'show']);

    // Actualizar un empleado específico
    Route::post('/edit/{id}', [EmpleadoController::class, 'update']);

    // Eliminar un empleado específico
    Route::delete('/{id}', [EmpleadoController::class, 'destroy']);
});

Route::prefix('provincias')->group(function () {
    // Obtener la lista de empleados
    Route::get('/', [ProvinciaController::class, 'index']);
});
