<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedTratamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('med_tratamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha_inicial');
            $table->dateTime('fecha_final');
            $table->integer('unidades');
            $table->integer('frecuencia');
            $table->string('instruccion');
            $table->unsignedInteger('tratamiento_id');
            $table->foreign('tratamiento_id')->references('id')->on('tratamientos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('med_tratamientos');
    }
}
