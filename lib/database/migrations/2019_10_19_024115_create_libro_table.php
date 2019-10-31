<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('imagen');
            $table->unsignedBigInteger('idautor');
            $table->foreign('idautor')->references('id')->on('autor');
            $table->unsignedBigInteger('ideditorial');
            $table->foreign('ideditorial')->references('id')->on('editorial');
            $table->unsignedBigInteger('idcategoria');
            $table->foreign('idcategoria')->references('id')->on('categoria');
            $table->unsignedBigInteger('idestadolibro');
            $table->foreign('idestadolibro')->references('id')->on('estadolibro');
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
        Schema::dropIfExists('libro');
    }
}
