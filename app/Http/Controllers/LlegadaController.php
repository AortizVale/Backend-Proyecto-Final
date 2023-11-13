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
        ]);

        return redirect()->route("confirmacion");

        //echo 'usuario creado con éxito';
        }
    
}
