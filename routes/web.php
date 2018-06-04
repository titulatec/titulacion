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
Route::get('/deptoacad', 'AcadControler@index');
Route::post('/residencias_registro', 'AcadControler@reg_residencia');
Route::post('/nuevoreg', 'AcadControler@agregar_asesores');
Route::get('/asesor', 'AsesorController@index');


//============================================================================

//Bloque para Araceli ==========================================================
Route::get('/div_estudios', 'divisionController@index');
Route::post('/registro', 'divisionController@agregar_foraneo');
Route::get('/div_estudios/fora', 'divisionController@fora');
Route::get('/div_estudios/div_create', 'divisionController@div_create');
Route::get('/div_estudios/div_interno', 'divisionController@div_interno');
//===========================================================================

//Bloque para Eric ==========================================================


//===========================================================================

//Bloque para Mariela ==========================================================


//===========================================================================

//Bloque para Jaime==========================================================

Route::get('/alumno', 'AlumnoController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/alumno/veralumnos', 'AlumnoController@veralumnos')->name('veralumnos');
Route::post('/admin_registro', 'AdminController@agregar_personal');
Route::post('/cargar_datos_usuarios', 'AdminController@cargar_datos_usuarios');
Route::post('/registrar_proyecto', 'AlumnoController@registrar_proyecto');

//Comentario nuevo de jaime
//===========================================================================


