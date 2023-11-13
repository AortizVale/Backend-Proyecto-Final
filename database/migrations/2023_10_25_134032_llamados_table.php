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
        Schema::create('llamados', function(Blueprint $table) {
            $table->id('cod_llamado');
            $table->unsignedBigInteger('cod_llegada');
            $table->foreign('cod_llegada')->references('cod_llegada')->on('llegadas')->unique();
            $table->integer('num_llamado');
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
        Schema::dropIfExists('llamados');
    }
};
