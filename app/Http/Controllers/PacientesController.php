<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function listPacientes()
    {
        return view("paginas.ingreso");
    }

    public function vistaMedico()
    {
        return view("paginas.gestor");
    }

    public function vistaLlamado()
    {

        /* if (auth()->user()->hasPermissionTo('llamada')) { */
            return view("paginas.llamado");
       /*  } else {
            echo "NO TIENE PERMISOS";
        } */

    }

    public function vistaProgramacion()
    {
        return view("paginas.progamacion");
    }

    public function vistaConfirmacion()
    {
        return view("paginas.conf_llamada");
    }
}
