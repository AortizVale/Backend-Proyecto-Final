<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Llegada extends Model
{
    use HasFactory;
    protected $table = 'llegadas';
    protected $primaryKey = 'cod_llegada';
    protected $fillable = ['cod_program'];

    public function programacion()
    {
        return $this->belongsTo(Programacion::class, 'cod_program');

    }

}