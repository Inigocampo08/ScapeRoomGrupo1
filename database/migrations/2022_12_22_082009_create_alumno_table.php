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
            $table->engine = 'InnoDB';
            $table->bigInteger('IDUsuario')->autoIncrement();
            $table->bigInteger('IDGrupo');
            //$table->primary(['IDUsuario','IDGrupo']);
            $table->foreign('IDUsuario')->references('IDUsuario')->on('usuario');
            $table->foreign('IDGrupo')->references('IDGrupo')->on('grupo');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno');
    }
};
