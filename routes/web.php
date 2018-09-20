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
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('bienvenida');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*//Rutas para Materias
Route::get('/materia/listado', 'MateriaController@index');
Route::get('/materia/create', 'MateriaController@create');
Route::post('/materia/store', 'MateriaController@store');
Route::get('/materia/show', 'MateriaController@show');
Route::get('/materia/edit', 'MateriaController@edit');
Route::post('/materia/update', 'MateriaController@update');*/

/*Route::get('/materia/show/{id}', function($id){
  $nombre = "Progra. Internet";
  
  return view('materias.showMateria', compact('id', 'nombre'));
});*/

Route::resource('materia', 'MateriaController');

////////////////////////
Route::get('/usuarios', 'UsuarioController@index');
Route::get('/alumnos', 'AlumnoController@index');
Route::get('/empleados', 'EmpleadoController@index');
Route::get('/dependencias', 'DependenciaController@index');
//////////////////////
