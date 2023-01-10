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
        Schema::create('prueba5', function (Blueprint $table) {
            $table->string('Palabra', 200);
            $table->Integer('Grupo')->unsigned();
            $table->unsignedBigInteger('IDPrueba');
            $table->foreign('IDPrueba')->references('id')->on('prueba_base')->onDelete('cascade');
            $table->bigIncrements('IDPruebaPregunta');
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
        Schema::dropIfExists('prueba5s');
    }
};
