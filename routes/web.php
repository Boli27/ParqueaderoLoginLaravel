<?php

use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\ComprobanteController;
use App\Http\Controllers\TarifasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\EmpleadosController;


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
    return view('auth/register');
})->name('inicio');

//user
Route::post('/registrarUser', [RegisterController::class, 'register'])->name('register');
Route::get('/registrarUser', [RegisterController::class, 'show'])->name('ShowRegister');

Route::post('/loginUser', [LoginController::class, 'login'])->name('login');
Route::get('/loginUser', [LoginController::class, 'show'])->name('ShowLogin');

Route::get('/logout', [LogoutController::class, 'logout'])->name('Logout');


//vehiculo
Route::post('/registrarV', [VehiculosController::class, 'insertar'])->name('Addvehiculos');
Route::get('/registrarV', [VehiculosController::class, 'consultar'])->name('Showvehiculos');
Route::get('/editar/{id}', [VehiculosController::class, 'vereditar'])->name('ShowEditvehiculos');
Route::patch('/editar/{id}', [VehiculosController::class, 'editar'])->name('Updatevehiculos');
Route::delete('/eliminar/{id}', [VehiculosController::class, 'borrar'])->name('Deletevehiculo');

//comprobante 
Route::post('/comprobante/{id}', [ComprobanteController::class, 'CrearComprobante'])->name('GenerateComprobante');
Route::get('/vercomprobante/{id}', [ComprobanteController::class, 'VerComprobante'])->name('ShowComprobante');

//tarifas
Route::get('/editarTarifa/{id}', [TarifasController::class, 'showedit'])->name('ShowEditTarifas');
Route::patch('/editarTarifa/{id}', [TarifasController::class, 'edit'])->name('EditTarifas');
Route::get('/AgregarTarifa', [TarifasController::class, 'show'])->name('ShowAddTarifas');
Route::post('/AgregarTarifa', [TarifasController::class, 'add'])->name('AddTarifas');
Route::delete('/eliminartarifa/{id}', [TarifasController::class, 'delete'])->name('Deletetarifa');

//empleados
Route::get('/editarempleado/{id}', [EmpleadosController::class, 'showedit'])->name('ShowEditEmpleado');
Route::patch('/editarempleadooo/{id}', [EmpleadosController::class, 'edit'])->name('EditEmpleado');
Route::get('/agregarempleado', [EmpleadosController::class, 'show'])->name('ShowAddEmpleado');
Route::post('/agregarempleado', [EmpleadosController::class, 'add'])->name('AddEmpleado');
Route::delete('/eliminarempleado/{id}', [EmpleadosController::class, 'delete'])->name('DeleteEmpleado');