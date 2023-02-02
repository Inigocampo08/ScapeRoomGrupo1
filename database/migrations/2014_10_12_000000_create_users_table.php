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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apellidos', 30);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('imagen', 30)->nullable();
            $table->string("rol", 25);
            $table->string("Grupo",30);
            $table->foreign("nombre_grupo")->references("Nombre")->on("grupos")->onDelete("cascade")->onUpdate("cascade");
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
