<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Producto;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('producto');
            $table->timestamps();
        });

        Producto::create([
            'producto' => 'Proyecto'
        ]);
        Producto::create([
            'producto' => 'Tesis'
        ]);
        Producto::create([
            'producto' => 'Residencias'
        ]);
   

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
