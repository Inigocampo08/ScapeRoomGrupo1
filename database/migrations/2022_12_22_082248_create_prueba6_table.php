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
        Schema::create('prueba6', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigInteger('IDPrueba')->unsigned();
            $table->bigInteger('IDPregunta')->unsigned();
            $table->string('Nombre', 200);
            $table->string('Compuesto', 200);
            $table->Integer('Ano', 4)->unsigned();
            $table->primary(['IDPrueba','IDPregunta']);
            $table->foreign('IDPrueba')->references('IDPrueba')->on('prueba_base'); 

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prueba6');
    }
};
