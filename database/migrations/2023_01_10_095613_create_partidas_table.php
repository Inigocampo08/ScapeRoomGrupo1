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
        Schema::create('partida', function (Blueprint $table) {
            $table->unsignedBigInteger('IDPrueba');
            $table->unsignedBigInteger('IDUser');
            $table->Integer('Puntuacion');
            $table->Integer('Tiempo');
            $table->foreign('IDPrueba')->references('id')->on('prueba_base')->onDelete('cascade');
            $table->foreign('IDUser')->references('id')->on('users')->onDelete('cascade');
            $table->unique(['IDPrueba', 'IDUser']);
            $table->bigIncrements('IDPruebaUsuario');
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
        Schema::dropIfExists('partidas');
    }
};
