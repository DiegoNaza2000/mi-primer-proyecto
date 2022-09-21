<?php

use App\Http\Controllers\MedicoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\EspecialidadController;

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

//Route::get('/', function () {


Route::resource('/medico', MedicoController::class);
Route::resource('/paciente', PacienteController::class);
Route::resource('/cita', CitaController::class);
Route::resource('/receta', RecetaController::class);
Route::resource('/especialidad', EspecialidadController::class);
