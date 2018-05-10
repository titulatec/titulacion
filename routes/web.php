<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui se subiran todas las rutas por favor verificar que no tengas errores,
| solo subir a GitHub cuando no les marque errores en caso de un error grave
| avisar al equipo.
*/

// Rutas Generales ******* En caso de mover algo favor de avisar en el grupo antes de subirlas a GitHub cada integrante respete su bloque de codigo****

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Bloque para Alma ============================================================
//Route::get('/Profesores', 'AcadController@index');
//Route::get('/JefeDepto', 'AcadController@index');


//============================================================================

//Bloque para Araceli ==========================================================


//===========================================================================

//Bloque para Eric ==========================================================


//===========================================================================

//Bloque para Mariela ==========================================================


//===========================================================================

//Bloque para Jaime==========================================================

Route::get('/alumno', 'AlumnoController@index');

Route::get('/admin', 'AdminController@index');

Route::get('/alumno/veralumnos', 'AlumnoController@veralumnos')->name('veralumnos');

Route::post('/registro', 'AdminController@agregar_personal');

Route::post('/cargar_datos_usuarios', 'AdminController@cargar_datos_usuarios');

Route::post('/registrar_proyecto', 'AlumnoController@registrar_proyecto');
//===========================================================================


