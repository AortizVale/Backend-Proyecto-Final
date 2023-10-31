<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios_consulta', function(Blueprint $table) {
            $table->id('cod_horario');
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_final');
            $table->unsignedBigInteger('medico');
            $table->foreign('medico')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios_consulta');
    }
};
