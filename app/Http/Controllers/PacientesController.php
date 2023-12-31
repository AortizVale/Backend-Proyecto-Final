<?php

namespace App\Http\Controllers;

use App\Models\Consultorio;
use App\Models\Llamado;
use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\users;
use App\Models\Programacion;
use App\Models\Llegada;
use Illuminate\Support\Facades\Auth;

class PacientesController extends Controller
{
    public function listPacientes()
    {
        return view("paginas.ingreso");
    }

    public function vistaMedico()
    {
        $fechaActual = now()->toDateString();

        $llamadosRealizados = Llamado::pluck('cod_llegada')->toArray();
        $usuarioLogueado = Auth::user();

        $llegadas = Llegada::whereHas('programacion.medico', function ($query) use ($usuarioLogueado) {
            $query->where('id', $usuarioLogueado->id);
        })->whereHas('programacion', function ($query) use ($fechaActual) {
            $query->where('fecha', $fechaActual);
        })
        ->where("pasado", 0)->get();
        return view("paginas.gestor",['llegadas' => $llegadas , 'llamados_Realizados' => $llamadosRealizados]);
    }

    public function vistaLlamado()
    {
        $fechaActual = now()->toDateString();

        $llamados = Llamado::with('llegada')->orderBy('updated_at','desc')
            ->whereHas('llegada.programacion', function ($query) use ($fechaActual) {
            $query->where('fecha', $fechaActual);
        })->
        get();
            return view("paginas.llamado", ['llamados' => $llamados]);
    }

    public function vistaProgramacion()
    {
        $users = users::with("roles")->whereHas("roles", function($q) {
            $q->whereIn("name", ["medico"]);
        })->get();
        $consultorios = Consultorio::all();
        $pacientes = Paciente::all();
        //$users = users::all();
        return view("paginas.progamacion", ['consultorios' => $consultorios, 'pacientes' => $pacientes, 'users' =>$users]);
    }

    public function vistaConfirmacion()
{
    // Obtener la fecha actual
    $fechaActual = now()->toDateString();
    // Obtener los cod_program de llegadas
    $codigosLlegadas = Llegada::pluck('cod_program')->toArray();

    // Obtener programaciones que no estén en llegadas
    $programaciones = Programacion::with('medico', 'paciente', 'consultorio')
        ->whereNotIn('cod_program', $codigosLlegadas)
        ->where('fecha', $fechaActual)
        ->get();

    return view("paginas.conf_llamada", ['programaciones' => $programaciones]);
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
