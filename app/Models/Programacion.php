<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programacion extends Model
{
    use HasFactory;
    protected $table = 'programaciones';
    protected $primaryKey = 'cod_program';
    protected $fillable = ['cod_paciente','cod_consultorio','cod_medico','programado_por','descripcion','fecha','hora_inicio','hora_final'];

    public function medico()
    {
        return $this->belongsTo(users::class, 'cod_medico');
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'cod_paciente');
    }

    public function consultorio()
    {
        return $this->belongsTo(Consultorio::class, 'cod_consultorio');


    }
    public function agregado_por()
    {
        return $this->belongsTo(users::class, 'programado_por');
    }



}
