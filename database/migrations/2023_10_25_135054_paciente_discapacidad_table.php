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
        Schema::create('paciente_discapacidad', function(Blueprint $table) {
            $table->unsignedBigInteger('cod_paciente');
            $table->unsignedBigInteger('cod_discapacidad');
            $table->primary(['cod_paciente', 'cod_discapacidad']);
            $table->foreign('cod_paciente')->references('cod_paciente')->on('pacientes');
            $table->foreign('cod_discapacidad')->references('cod_discapacidad')->on('discapacidades');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente_discapacidad');
    }
};
