<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table = 'pacientes';
    protected $primaryKey = 'cod_paciente';
    protected $fillable = ['tipo_doc','num_doc','nombres','apellidos','correo','telefono','direccion','fecha_nac'];



}
