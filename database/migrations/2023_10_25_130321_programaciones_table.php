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
            $table->unsignedBigInteger('cod_paciente');
            $table->unsignedBigInteger('cod_consultorio');
            $table->unsignedBigInteger('cod_medico');
            $table->unsignedBigInteger('programado_por');
            $table->text('descripcion');
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_final');

            $table->foreign('cod_paciente')->references('cod_paciente')->on('pacientes');
            $table->foreign('cod_consultorio')->references('cod_consultorio')->on('consultorios');
            $table->foreign('cod_medico')->references('id')->on('users');
            $table->foreign('programado_por')->references('id')->on('users');

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
