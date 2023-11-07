<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConsultorioController;
use App\Http\Controllers\UsersController;

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

Route::get('/', [AuthController::class, "homePage"])->name('home');

Route::get('ingreso', [PacientesController::class, "listPacientes"])->name('ingreso');

Route::get('gestor', [PacientesController::class, "vistaMedico"])->name('gestor');

Route::get('llamado', [PacientesController::class, "vistaLlamado"])->name('llamado');

Route::get('login', [AuthController::class, "loginPage"])->name('login');

Route::get('registro', [AuthController::class, "registerPage"])->name('registro'); 
Route::post('register', [UsersController::class, "store"])->name('registro.store'); 

Route::get('iniciar_s', [UsersController::class, "login"])->name('login.auth'); 

Route::get('consultorio/create', [ConsultorioController::class, "create"])->name('consultorio.create'); 
Route::post('consultorio', [ConsultorioController::class, "store"])->name('consultorio.store'); 



