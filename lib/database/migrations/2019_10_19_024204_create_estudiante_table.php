<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->unsignedBigInteger('id_institucion');
            $table->foreign('id_institucion')->references('id')->on('institucion');
            $table->string('fotografia');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('correo');
            $table->string('grado');
            $table->unsignedBigInteger('id_pais');
            $table->foreign('id_pais')->references('id')->on('pais');
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
        Schema::dropIfExists('estudiante');
    }
}
