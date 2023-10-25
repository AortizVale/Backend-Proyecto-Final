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
        Schema::create('llegadas', function(Blueprint $table) {
            $table->id('cod_llegada');
            $table->unsignedBigInteger('cod_program');
            $table->foreign('cod_program')->references('cod_program')->on('programaciones');
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
        Schema::dropIfExists('llegadas');
    }
};
