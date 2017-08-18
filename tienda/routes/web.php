<?php

Route::get('/', function () {
	//$products = App\Product::All();

	$products = App\Product::existencia();

	return view('products.index', compact('products'));
});

Route::get('/detalle/{id}', function ($id) {
	$product = App\Product::find($id);
	return view('products.detalle', compact('product'));
});

?>