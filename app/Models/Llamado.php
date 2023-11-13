<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Llamado extends Model
{
    use HasFactory;
    protected $table = 'llamados';
    protected $primaryKey = 'cod_llamado';
    protected $fillable = ['cod_llegada','num_llamado','pasado'];

    public function llegada()
    {
        return $this->belongsTo(Llegada::class, 'cod_llegada');

    }

}