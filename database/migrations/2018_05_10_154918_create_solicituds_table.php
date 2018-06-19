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
            $table->string('nombre_proyecto')->nullable();
            $table->string('asesor')->nullable();
            $table->string('revisor1')->nullable();
            $table->string('revisor2')->nullable();
            $table->string('optitulacion');
            $table->string('producto'); 
           // $table->string('solicitud')->nullable();
            $table->string('tipo')->nullable();
            $table->string('status')->nullable();
            $table->string('mensaje')->nullable();
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
