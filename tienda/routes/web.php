<?php

Route::get('/','ProductsController@index');
Route::get('/detalle/{product}', 'ProductsController@show');

?>