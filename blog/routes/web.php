<?php

Route::get('/', 'PostsController@index');
Route::get('/register', 'RegistrationController@create');
Route::get('/login', 'SessionsController@create');

Route::group(['middleware' => ['auth']], function(){

	Route::get('/posts/create', 'PostsController@create');
	Route::post('/logout', 'PostsController@store');
	Route::post('/posts', 'PostsController@store');

});

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/login', 'SessionsController@auth');
Route::post('/users', 'RegistrationController@store');
Route::post('/posts/{post}/comments', 'CommentsController@store');






