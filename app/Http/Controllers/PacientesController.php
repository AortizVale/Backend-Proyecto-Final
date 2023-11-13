<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

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
            return view("paginas.llamado");
    }

    public function vistaProgramacion()
    {
        return view("paginas.progamacion");
    }

    public function vistaConfirmacion()
    {
        return view("paginas.conf_llamada");
    }

    public function store(Request $request){
       
        // Crear el usuario
        $paciente = Paciente::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'correo' => $request->correo,
            'num_doc' => $request->tipo_doc,
            'tipo_doc' => $request->num_doc,
            'direccion' => $request->direccion,
            'fecha_nac' => $request->fecha_nac,
            'telefono' => strval($request->telefono)
        ]);

        return redirect()->route("ingreso");

        //echo 'usuario creado con éxito';
        }
}
