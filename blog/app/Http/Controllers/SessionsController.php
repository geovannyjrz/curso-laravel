<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
	public function create(){

		return view('auth.login');

	}

	public function auth(){

		$this->validate(request(), array(
			'password'=>'required',
			'email' => 'required|email'
			));

		if(auth()->attempt(['email'=>request('email'),
			'password'=>request('password')])){

			return redirect('/posts/create');
	}

	return redirect('/login');
}

public function logout(){
	auth()->logout();
	return redirect('/');
}


}
