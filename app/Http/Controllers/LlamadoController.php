<?php

namespace App\Http\Controllers;

use App\Models\Llamado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LlamadoController extends Controller
{
    public function store(Request $request)
    {

        // Crear el usuario
        Llamado::create([
            'cod_llegada' => $request->cod_llegada,
            'num_llamado' => 1
        ]);

        return redirect()->route("gestor");

        //echo 'usuario creado con éxito';
    }

    public function llamar_adicional(Request $request)
    {

        $llamado = Llamado::firstOrNew(['cod_llegada' => $request->cod_llegada]);

        // Incrementar el campo
        $llamado->num_llamado += 1;

        // Guardar el modelo
        $llamado->save();
        return redirect()->route("gestor");

        //echo 'usuario creado con éxito';
    }
}
