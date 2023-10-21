<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\AuthController;

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

Route::get('home', [AuthController::class, "homePage"]);

Route::get('ingreso', [PacientesController::class, "listPacientes"]);

Route::get('gestor', [PacientesController::class, "vistaMedico"]);

Route::get('llamado', [PacientesController::class, "vistaLlamado"]);

Route::get('login', [AuthController::class, "loginPage"]);

Route::get('registro', [AuthController::class, "registerPage"]);

