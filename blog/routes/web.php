<?php

Route::get('/', 'PostsController@index');
Route::get('/register', 'RegistrationController@create');
Route::get('/login', 'SessionsController@create');

Route::get('/pruebaAjax', 'AjaxController@prueba');

Route::group(['middleware' => ['auth']], function(){
	Route::get('/perfil', 'UsersController@profile');
	Route::get('/posts/create', 'PostsController@create');
	Route::get('/logout', 'SessionsController@logout');
	Route::get('/users/{user}', 'UsersController@delete');

	Route::post('/posts', 'PostsController@store');
	
	Route::delete('/posts/{post}', 'PostsController@delete');

});

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/login', 'SessionsController@auth');
Route::post('/users', 'RegistrationController@store');
Route::post('/posts/{post}/comments', 'CommentsController@store');






