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
            $table->unsignedBigInteger('IDPrueba');
	        $table->string('Nombre', 200);
            $table->string('Compuesto', 200);
            $table->Integer('Ano')->unsigned();
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
        Schema::dropIfExists('prueba6s');
    }
};
