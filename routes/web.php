<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConsultorioController;
use App\Http\Controllers\LlamadoController;
use App\Http\Controllers\LlegadaController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProgramacionController;

Route::middleware('noCache')->group(function () {

    //Rutas que requieren autenticacion
    Route::middleware('auth')->group(function () {
        Route::get('registro', [AuthController::class, "registerPage"])->name('registro')->middleware("can:registrar");
        Route::post('register', [UsersController::class, "store"])->name('registro.store')->middleware("can:registrar");

        Route::get('consultorio/create', [ConsultorioController::class, "create"])->name('consultorio.create')->middleware("can:consultorio");
        Route::post('consultorio', [ConsultorioController::class, "store"])->name('consultorio.store')->middleware("can:consultorio");

        Route::get('ingreso', [PacientesController::class, "listPacientes"])->name('ingreso')->middleware("can:ingreso");
        Route::post('ingreso/crearPaciente', [PacientesController::class, "store"])->name('paciente.store')->middleware("can:ingreso");

        Route::get('gestor', [PacientesController::class, "vistaMedico"])->name('gestor')->middleware("can:gestor");
        Route::post('gestor/create', [LlamadoController::class, "store"])->name('gestor.store')->middleware("can:gestor");
        Route::post('gestor/llamar', [LlamadoController::class, "llamar_adicional"])->name('gestor.llamar')->middleware("can:gestor");

        Route::get('llamado', [PacientesController::class, "vistaLlamado"])->name('llamado')->middleware("can:llamada");

        Route::get('programacion', [PacientesController::class, "vistaProgramacion"])->name('programacion')->middleware("can:programacion");
        Route::post('programacion/create', [ProgramacionController::class, "store"])->name('programacion.store')->middleware("can:programacion");

        Route::get('confirmacion', [PacientesController::class, "vistaConfirmacion"])->name('confirmacion')->middleware("can:confirmacion");
        Route::post('confirmacion/create', [LlegadaController::class, "store"])->name('confirmacion.store')->middleware("can:confirmacion");

        
    });

    //Rutas que no requieren ingresp
    Route::get('/', [AuthController::class, "homePage"])->name('home');
    Route::get('login', [AuthController::class, "loginPage"])->name('login');
    Route::post('iniciar_s', [UsersController::class, "login"])->name('login.auth');
    Route::post('logout', [UsersController::class, 'logout'])->name('logout');

});
