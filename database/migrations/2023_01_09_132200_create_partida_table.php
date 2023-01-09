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
            $table->foreign('IDPrueba')->references('id')->on('prueba_base')->onDelete('cascade');
            $table->unsignedBigInteger('IDUsuario');
            $table->foreign('IDUsuario')->references('id')->on('usuario')->onDelete('cascade');
            $table->primary(array('IDPrueba', 'IDUsuario'));

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
        Schema::dropIfExists('partida');
    }
};
