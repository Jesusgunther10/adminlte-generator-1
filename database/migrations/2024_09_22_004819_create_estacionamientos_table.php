<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstacionamientosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estacionamientos', function (Blueprint $table) {
            $table->id('id');
            $table->string('descripcion');
            $table->string('id_bloque');
            $table->string('id_categoria');
            $table->string('estado');
            $table->string('id_tarifas');
            $table->string('hora_entrada');
            $table->string('hora_salida');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estacionamientos');
    }
}
