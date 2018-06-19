<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Profesor;

class Refresh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

        Profesor::create([
            'RFC' => 'CACE721011MGRT09',
            'nombre_profe' => 'Elsa Cuevas Carrillo',
            'categoria' => 'completo',
            'cve_depto'=>'ISC'

        ]);

        Profesor::create([
            'RFC' => 'ZOSR691012MQTR98',
            'nombre_profe' => 'Rocío Guadalupe Zozaya Salas',
            'categoria' => 'completo',
            'cve_depto'=>'ISC'

        ]);

        Profesor::create([
            'RFC' => 'URRM651304MHTGG00',
            'nombre_profe' => 'María Patricia Uribe Rodríguez',
            'categoria' => 'completo',
            'cve_depto'=>'ISC'

        ]);

        Profesor::create([
            'RFC' => 'SACJ867801HQTRJI09',
            'nombre_profe' => 'Javier Sánchez Chavez',
            'categoria' => 'medio',
            'cve_depto'=>'ISC'

        ]);

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
