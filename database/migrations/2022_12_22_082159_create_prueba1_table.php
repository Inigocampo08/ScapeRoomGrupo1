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
        Schema::create('prueba1', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigInteger('IDPrueba')->unsigned();
            $table->bigInteger('IDPregunta')->unsigned();
            $table->string('OpcionA', 200);
            $table->string('OpcionB', 200);
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
        Schema::dropIfExists('prueba1');
    }
};
