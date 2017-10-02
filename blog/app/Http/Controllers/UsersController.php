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

	public function edit(User $user){
		return view('users.edit', compact('user'));
	}

	public function imageEdit(){
		return view('users.image');
	}

	public function imageUpdate(User $user){

		$this->validate(request(), array(
			'image' => 'required|image|mimes:jpeg, jpg, png' 
		));
		
		$image = request()->file('image');

		$imageName = $image->getClientOriginalName();
		$imagePath = public_path('/img/users');

		//Server public/img/users
		$image->move($imagePath, time() . "-" . $imageName);

		//Campo en BD
		$user->image = time() . "-" . $imageName;
		$user->save();

		return redirect('perfil');
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
