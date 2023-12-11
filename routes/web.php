<?php

use App\Http\Controllers\ClienteController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { //esta es la estructura base, guiense con esto para traer los htmls
    return view('welcome');
});

Route::resource('Cliente', ClienteController::class);
route::resource('cliente', ClienteController::class);
// ---------------------------------------------------------------------------------------


Route::get('/inventario', function () {
    return view('inventario');
});

// -----------------------------------------------------------------------------------



// ---------------------------------------------------------------------------------------

Route::get('/empleados', function () {
    return view('empleados');
});

// -----------------------------------------------------------------------------------



// Jairo ------------------------------------------------------------------------------------

Route::get('/finanzas', function () {
    return view('finanzas');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/factura', function () {
    return view('factura');
});

//Jhon
Route::get('/financiero', function () {
    return view('financiero');
});

// -------------------------------------------------------------------------------
Route::get('/usuarios', function () {
    return view('usuarios');
});
// -----------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------
Route::get('/ventas', function () {
    return view('ventas');
});


