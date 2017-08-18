<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public static function precioAlto(){

		return static::where('precio', '>', 4000)
		->orderBy('descripcion', 'desc')
		->get();

	}

	public static function precioBajo(){

		return static::where('precio', '<', 3500)
		->orderBy('descripcion', 'desc')
		->get();
		
	}

	public static function existencia(){

		$existencia = static::where('existencia', '1')
		->orderBy('descripcion', 'desc')
		->get();

		return $existencia;
		
	}
}
