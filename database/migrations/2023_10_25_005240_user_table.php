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
        Schema::create('usuarios', function(Blueprint $table) {
            $table->id('cod_usuario');
            $table->string('correo',100);
            $table->text('psswd');
            $table->string('tipo_doc',50);
            $table->string('num_doc',50);
            $table->string('nombre1',50);
            $table->string('nombre2',50);
            $table->string('apellido1',50);
            $table->string('apellido2',50);
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
        Schema::dropIfExists('usuarios');
    }
};
