<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
	public function create(){
		return view('auth.create');
	}

	public function store(){

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
		//Validacion de los campos
>>>>>>> c99730b8c1c9aecb3ea0cbebdaa67f04ca3ea68b
>>>>>>> master
		$this->validate(request(), array(
			'txt-name' => 'required|min:5',
			'password' => 'required|min:6|confirmed',
			'txt-mail' => 'required|email|unique:users,email'
			));

		$user = new User();

		$user->name = request('txt-name');
		$user->email = request('txt-mail');
		$user->password = bcrypt(request('password'));
		$user->created_at = date("Y-m-d H:i:s"); 
		$user->save();

		return redirect('/login');
	}
}
