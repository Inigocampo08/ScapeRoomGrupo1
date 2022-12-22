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
            $table->engine = 'InnoDB';
            $table->bigInteger('IDPrueba')->unsigned();
            $table->bigInteger('IDUsuario')->unsigned();
            $table->primary(['IDUsuario','IDPrueba']);
            $table->foreign('IDPrueba')->references('IDPrueba')->on('prueba_base');
            $table->foreign('IDUsuario')->references('IDUsuario')->on('usuario');
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
