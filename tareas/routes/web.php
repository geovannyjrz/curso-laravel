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

	$nombre = "Geovanny";
	$edad = 30;

	return view('welcome', compact('nombre','edad'));
});

Route::get('/tareas', function () {

	/*$tareas = array(
		'Tarea 1',
		'Tarea 2',
		'Tarea 3'
		);*/

	$tareas = DB::table('tareas')->get();

	dd($tareas[0]->titulo);

	return view('tareas', compact('tareas'));
});