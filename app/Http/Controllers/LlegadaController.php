<?php

namespace App\Http\Controllers;

use App\Models\Llegada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LlegadaController extends Controller
{
    public function store(Request $request){
       
        // Crear el usuario
        Llegada::create([
            'cod_program' => $request->cod_program,
            'pasado' => 0,
        ]);

        return redirect()->route("confirmacion");

        //echo 'usuario creado con éxito';
        }

        public function pasado(Request $request)
        {
    
            $Llegada = Llegada::firstOrNew(['cod_llegada' => $request->cod_llegada]);
    
            // Incrementar el campo
            $Llegada->pasado = 1;
    
            // Guardar el modelo
            $Llegada->save();

            return redirect()->route("gestor");
    
            //echo 'usuario creado con éxito';
        }
}
