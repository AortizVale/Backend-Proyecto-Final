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
        Schema::create('pacientes', function(Blueprint $table) {
            $table->id('cod_paciente');
            $table->string('tipo_doc',50);
            $table->string('num_doc',50);
            $table->string('nombre1',50);
            $table->string('nombre2',50);
            $table->string('apellido1',50);
            $table->string('apellido2',50);
            $table->string('correo',100);
            $table->integer('telefono');
            $table->text('direccion');
            $table->date('fecha_nac');
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
        Schema::dropIfExists('pacientes');
    }
};