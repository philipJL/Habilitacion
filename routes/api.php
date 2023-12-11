<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//--------------------- EMPLEADO -----------------------------------------------------
use App\Http\Controllers\Empleados\empleadoController; //llamamos al controlador

Route::get('/mostrarEmpleados', [empleadoController::class, 'index']); //Asignamos el metodo, la URL y la funcion a ejecutar
Route::get('/mostrarUnEmpleado', [empleadoController::class, 'mostrarUno']);
Route::post('/crearEmpleado', [empleadoController::class, 'create']);
Route::delete('/eliminarEmpleado', [empleadoController::class, 'destroy']);
Route::put('/actualizarEmpleado', [empleadoController::class, 'actualizar']);

//--------------------- LICENCIAS -----------------------------------------------------
use App\Http\Controllers\Empleados\licenciaController; //llamamos al controlador

Route::get('/mostrarLicencias', [licenciaController::class, 'index']); //Asignamos el metodo, la URL y la funcion a ejecutar
Route::get('/mostrarUnaLicencia', [licenciaController::class, 'mostrarUno']);
Route::post('/crearLicencia', [licenciaController::class, 'create']);
Route::delete('/eliminarLicencia', [licenciaController::class, 'destroy']);
Route::put('/actualizarLicencia', [licenciaController::class, 'actualizar']);
Route::get('/mostrarTipoLicencia', [licenciaController::class, 'index_tipo_licencia']);


