<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('notes', 'NotesController@index');
Route::get('notes/{id}/destroy', 'NotesController@destroy')->name('notes.destroy');

Route::get('/alumno', 'AlumnoController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/div_estudios', 'divisionController@index');

Route::get('/alumno/veralumnos', 'AlumnoController@veralumnos')->name('veralumnos');

Route::post('/registro', 'adminController@agregar_personal');

Route::get('/subir', function () {
    return view('admin.subir_alum');
});

Route::post('/cargar_datos_usuarios', 'AdminController@cargar_datos_usuarios');

Route::post('/registrar_proyecto', 'AlumnoController@registrar_proyecto');
