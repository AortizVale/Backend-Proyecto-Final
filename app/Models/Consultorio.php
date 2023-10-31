<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultorio extends Model
{
    use HasFactory;
    protected $table = 'consultorios';
    protected $primaryKey = 'cod_consultorio';
    protected $fillable = ['nombre'];



}
