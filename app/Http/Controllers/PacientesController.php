<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function listPacientes(){
        return view("paginas.ingreso");
    }

    public function vistaMedico(){
        return view("paginas.gestor");
    }

    public function vistaLlamado(){
        return view("paginas.llamado");
    }

    public function vistaProgramacion(){
        return view("paginas.progamacion");
    }
}
