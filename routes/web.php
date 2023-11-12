<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConsultorioController;
use App\Http\Controllers\UsersController;



Route::get('/', [AuthController::class, "homePage"])->name('home');

Route::get('ingreso', [PacientesController::class, "listPacientes"])->name('ingreso');

Route::get('gestor', [PacientesController::class, "vistaMedico"])->name('gestor');

Route::get('llamado', [PacientesController::class, "vistaLlamado"])->name('llamado')->middleware('auth',"can:llamada",'noCache');

Route::get('programacion', [PacientesController::class, "vistaProgramacion"])->name('programacion');

Route::get('confirmacion', [PacientesController::class, "vistaConfirmacion"])->name('confirmacion');

Route::get('login', [AuthController::class, "loginPage"])->name('login');

Route::get('registro', [AuthController::class, "registerPage"])->name('registro'); 
Route::post('register', [UsersController::class, "store"])->name('registro.store'); 
Route::post('iniciar_s', [UsersController::class, "login"])->name('login.auth'); 
Route::post('logout', [UsersController::class, 'logout'])->name('logout');

Route::get('consultorio/create', [ConsultorioController::class, "create"])->name('consultorio.create'); 
Route::post('consultorio', [ConsultorioController::class, "store"])->name('consultorio.store'); 



