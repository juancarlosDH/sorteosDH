<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesSorteos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorteos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('fecha_sorteo')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_cierre')->nullable();
            $table->string('premio1');
            $table->string('premio2');
            $table->string('premio3');
            $table->integer('ganador1')->nullable();
            $table->integer('ganador2')->nullable();
            $table->integer('ganador3')->nullable();
        });

        Schema::create('participantes',function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('sorteo_id');
            $table->integer('usuario_id');
            $table->integer('numero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sorteos');
        Schema::dropIfExists('participantes');
    }
}
