<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function prueba(){

    	$tareas = array('tarea1', 'tarea2', 'tarea3' );
    	return $tareas;
    }
}
