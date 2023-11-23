<?php

use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\ComprobanteController;
use App\Http\Controllers\TarifasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('vehiculo/agregarV');
})->name('inicio');

Route::post('/', [VehiculosController::class, 'insertar'])->name('Addvehiculos');
Route::get('/', [VehiculosController::class, 'consultar'])->name('Showvehiculos');
Route::get('/editar/{id}', [VehiculosController::class, 'vereditar'])->name('ShowEditvehiculos');
Route::patch('/editar/{id}', [VehiculosController::class, 'editar'])->name('Updatevehiculos');

Route::delete('/eliminar/{id}', [VehiculosController::class, 'borrar'])->name('Deletevehiculo');

//comprobante 
Route::post('/comprobante/{id}', [ComprobanteController::class, 'CrearComprobante'])->name('GenerateComprobante');
Route::get('/vercomprobante/{id}', [ComprobanteController::class, 'VerComprobante'])->name('ShowComprobante');

//tarifas
Route::get('/editarTarifa', [TarifasController::class, 'show'])->name('ShowEditTarifas');
Route::patch('/editarTarifa', [TarifasController::class, 'edit'])->name('EditTarifas');