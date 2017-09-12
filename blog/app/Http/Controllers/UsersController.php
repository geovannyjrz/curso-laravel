<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
	public function profile(){
		return view ('users.profile');
	}

	public function delete(User $user){

    	//Cerrar session
		auth()->logout();

    	//Borrar usuario
		User::destroy($user->id);

		//Redirecionar a login
		return redirect('/');

	}
}
