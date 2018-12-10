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
//prueba !
Route::resource('divestudios','divisionController');

Route::get('/home', 'HomeController@index')->name('home');

//Bloque para Alma ============================================================
Route::get('/deptoacad', 'AcadControler@index');
Route::post('/residencias_registro', 'AcadControler@reg_residencia');
Route::post('/nuevoreg', 'AcadControler@agregar_asesores');

//============================================================================

//Bloque para Araceli ==========================================================
Route::get('/div_estudios', 'divisionController@index');
Route::post('/registro', 'divisionController@agregar_foraneo');
Route::get('/div_estudios/index', 'divisionController@inicio');
Route::get('/div_estudios/fora', 'divisionController@fora');
Route::get('/div_estudios/div_create', 'divisionController@div_create');
Route::get('/div_estudios/div_interno', 'divisionController@div_interno');
Route::get('/div_estudios/div_edit', 'divisionController@div_edit');

//
Route::post('/registra','divisionController@registra_fecha');
Route::get('/div_estudios/fecha_create', 'divisionController@fecha_create');
Route::get('/div_estudios/hora_isctics','divisionController@hora_isctics');
Route::get('/div_estudios/fecha_alum','divisionController@fecha_alum');
Route::get('/div_estudios/all_alumnos','divisionController@all_alumnos');
Route::get('/div_estudios/div_formulario','divisionController@div_formulario');
Route::get('/div_estudios/ver_alumno/{id}','divisionController@ver_alumno');
Route::post('/div_estudios/ver_alumno/{id}','divisionController@update');
Route::get('/div_estudios/ver_alumno/aprobar/{id}','divisionController@aprobar');
//===========================================================================

//Bloque para Mariela ==========================================================
Route::get('/serv_escolares', 'EscolaresController@index');
Route::get('/serv_escolares/form', 'EscolaresController@form');
Route::get('/serv_escolares/checklist', 'EscolaresController@checklist');
//===========================================================================

//Bloque para Jaime==========================================================

Route::get('/alumno', 'AlumnoController@index'); //New modified
Route::get('/alumno/alumno', 'AlumnoController@proceso');  //New modified
Route::get('/alumno/ver_fechas', 'AlumnoController@ver_fechas');  //New modified 
Route::get('/admin', 'AdminController@index');
Route::get('/alumno/veralumnos', 'AlumnoController@veralumnos')->name('veralumnos'); //No existe fichero
Route::post('/admin_registro', 'AdminController@agregar_personal');
Route::post('/admin_alumnos', 'AdminController@agregar_alumnos');
Route::post('/cargar_datos_usuarios', 'AdminController@cargar_datos_usuarios');
Route::post('/registrar_proyecto', 'AlumnoController@registrar_proyecto');

Route::post('/registrar_hora', 'AlumnoController@registrar_hora');  //New modified


//Comentario nuevo de jaime
//===========================================================================



//Comentarios de prueba
Route::get('/jaime', 'JaimeController@index')->name('jaime-alumnos');
Route::get('jaime-descargar-alumnos', 'JaimeController@pdf')->name('jaime-alumnos.pdf');

Route::get('/alma', 'AlmaController@index')->name('alma-alumnos');
Route::get('alma-descargar-alumnos', 'AlmaController@pdf')->name('alma-alumnos.pdf');


Route::get('/jesus', 'jesusController@index')->name('jesus-alumnos');
Route::get('jesus-descargar-alumnos', 'jesusController@pdf')->name('jesus-alumnos.pdf');


Route::get('/ana', 'AnaController@index')->name('ana-alumnos');
Route::get('ana-descargar-alumnos', 'AnaController@pdf')->name('ana-alumnos.pdf');



Route::get('/araceli', 'AraceliController@index')->name('araceli-alumnos');
Route::get('araceli-descargar-alumnos', 'AraceliController@pdf')->name('araceli-alumnos.pdf');



