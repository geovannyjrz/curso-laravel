<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
	public function profile(){
		return view ('users.profile');
	}

	public function update(User $user){

		$this->validate(request(), array(
			'txt-name' => 'required',
			'txt-mail' => 'required'
			));

		$user->title = request('txt-title');
		$user->body = request('txt-body');
		$user->updated_at = date("Y-m-d H:i:s"); 

		$post->save();

		return redirect('/perfil');

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
