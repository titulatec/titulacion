<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Filtrou extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('filtrou', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_fecha')->nullable();
            $table->integer('id_alumno')->nullable();
            $table->string('fecha')->nullable();
            $table->string('const_ini_ter')->nullable();
            $table->string('cred_cult')->nullable();
            $table->string('cred_dep');
            $table->string('cred_tut'); 
            $table->string('cred_congr')->nullable();
            $table->string('cred_otr')->nullable();
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
        //
    }
}
