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
        Schema::create('programaciones', function(Blueprint $table) {
            $table->id('cod_program');
            $table->unsignedBigInteger('cod_horario');
            $table->unsignedBigInteger('cod_paciente');
            $table->unsignedBigInteger('cod_consultorio');
            $table->unsignedBigInteger('programado_por');
            $table->text('descripcion');

            $table->foreign('cod_horario')->references('cod_horario')->on('horarios_consulta');
            $table->foreign('cod_paciente')->references('cod_paciente')->on('pacientes');
            $table->foreign('cod_consultorio')->references('cod_consultorio')->on('consultorios');
            $table->foreign('programado_por')->references('cod_usuario')->on('usuarios');

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
        Schema::dropIfExists('programaciones');
    }
};
