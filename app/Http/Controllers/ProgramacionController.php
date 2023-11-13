<?php

namespace App\Http\Controllers;

use App\Models\Programacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgramacionController extends Controller
{
    public function store(Request $request){
        $id = auth()->user()->id ;
       
        // Crear el usuario
        $Programacion = Programacion::create([
            'cod_paciente' => $request->cod_paciente,
            'cod_consultorio' => $request->cod_consultorio,
            'cod_medico' => $request->cod_medico,
            'programado_por' => $id,
            'descripcion' => $request->descripcion,
            'fecha' => $request->fecha,
            'hora_inicio' => $request->hora_inicio,
            'hora_final' => $request->hora_final
        ]);

        return redirect()->route("programacion");

        //echo 'usuario creado con éxito';
        }
    
}
