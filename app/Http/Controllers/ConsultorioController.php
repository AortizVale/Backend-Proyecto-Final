<?php

namespace App\Http\Controllers;

use App\Models\Consultorio;
use Illuminate\Http\Request;

class ConsultorioController extends Controller
{
    public function create(){
        return view("consultorio.create");
    }
    public function store(Request $request){
        $nuevoConsultorio=new Consultorio();
        $nuevoConsultorio->nombre=$request->nombre;
        $nuevoConsultorio->save();
        echo 'consultorio creado';
    }
    
}
