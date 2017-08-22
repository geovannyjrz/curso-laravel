<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
	public function index(){

		$products = Product::All();
		return view('products.index', compact('products'));

	}

	public function show(Product $product){
		
		return view('products.detalle', compact('product'));

	}

	//index: Todo
	//show: Uno / ID
	//update: UNO / ID
	//store: Guarda
	//delete: Unos / ID
}
