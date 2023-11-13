<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConsultorioController;
use App\Http\Controllers\UsersController;

Route::middleware('noCache')->group(function () {

    //Rutas que requieren autenticacion
    Route::middleware('auth')->group(function () {
        Route::get('ingreso', [PacientesController::class, "listPacientes"])->name('ingreso');

        Route::get('consultorio/create', [ConsultorioController::class, "create"])->name('consultorio.create');
        Route::post('consultorio', [ConsultorioController::class, "store"])->name('consultorio.store');

        Route::get('registro', [AuthController::class, "registerPage"])->name('registro');
        Route::post('register', [UsersController::class, "store"])->name('registro.store');
        Route::get('gestor', [PacientesController::class, "vistaMedico"])->name('gestor');

        Route::get('llamado', [PacientesController::class, "vistaLlamado"])->name('llamado')->middleware("can:llamada");

        Route::get('programacion', [PacientesController::class, "vistaProgramacion"])->name('programacion');

        Route::get('confirmacion', [PacientesController::class, "vistaConfirmacion"])->name('confirmacion');
    });

    //Rutas que no requieren ingresp
    Route::get('/', [AuthController::class, "homePage"])->name('home');
    Route::get('login', [AuthController::class, "loginPage"])->name('login');
    Route::post('iniciar_s', [UsersController::class, "login"])->name('login.auth');
    Route::post('logout', [UsersController::class, 'logout'])->name('logout');
    
});
