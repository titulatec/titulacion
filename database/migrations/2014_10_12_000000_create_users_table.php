<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('rol')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'name' => 'Administrador',
            'email' => 'admin@itsjr.com',
            'password' => bcrypt('admin'),
            'rol'=>'admin']);

        User::create([
            'name' => 'Division de estudios',
            'email' => 'division@itsjr.com',
            'password' => bcrypt('division'),
            'rol'=>'div']);


        User::create([
            'name' => 'Departamento Académico',
            'email' => 'academico@itsjr.com',
            'password' => bcrypt('academico'),
            'rol'=>'jefe']);


        User::create([
            'name' => 'Servicios Escolares',
            'email' => 'escolares@itsjr.com',
            'password' => bcrypt('escolares'),
            'rol'=>'esc']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
    
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

}
