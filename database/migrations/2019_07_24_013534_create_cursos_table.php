<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('curso');
            $table->text('duracion');
            $table->date('fecha_ini');
            $table->text('presentacion');
            $table->text('obj_general');
            $table->unsignedBigInteger('id_tipo'); 
            $table->foreign('id_tipo')->references('id')->on('tipos');
            $table->unsignedBigInteger('carrera_id'); 
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->timestamps();
            $table->Integer('activo');
            $table->text('perfil_entrada');
            $table->text('perfil_salida');

           
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
