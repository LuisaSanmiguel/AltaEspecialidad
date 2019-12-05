<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_inscripcions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('inscripcion_id');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('inscripcion_id')->references('id')->on('inscripcions');
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
        Schema::dropIfExists('curso_inscripcions');
    }
}
