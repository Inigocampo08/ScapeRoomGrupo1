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
        Schema::create('alumno', function (Blueprint $table) {
            $table->unsignedBigInteger('IDUsuario');
            $table->unsignedBigInteger('IDGrupo');
            $table->foreign('IDUsuario')->references('id')->on('usuario')->onDelete('cascade');
            $table->foreign('IDGrupo')->references('id')->on('grupo')->onDelete('cascade');
            $table->unique(['IDUsuario', 'IDGrupo']);
            $table->bigIncrements('IDUsuarioGrupoA');
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
        Schema::dropIfExists('alumnos');
    }
};
