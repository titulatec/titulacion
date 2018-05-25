<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //agregar todos los datosde la tabla
    public function up()
    {
        Schema::create('solicituds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_control')->unique();
            $table->string('optitulacion');
            $table->string('producto'); 
            $table->string('solicitud');
            $table->string('tipo');
            $table->string('status');
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
        Schema::dropIfExists('solicituds');
    }
}
