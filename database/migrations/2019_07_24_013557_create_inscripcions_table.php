<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcions', function (Blueprint $table) {
 $table->bigIncrements('id');
            $table->string('direccion');
            $table->string('telefono');
            $table->unsignedBigInteger('ciudad_id');
            $table->enum('typeDoc',['CC','TI']);
            $table->string('numDc');
            $table->unsignedBigInteger('user_id');
            
            $table->foreign('ciudad_id')->references('id')->on('ciudades');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('inscripcions');
    }
}
