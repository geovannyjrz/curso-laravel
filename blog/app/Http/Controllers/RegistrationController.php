<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
	public function create(){
		return view('auth.create');
	}

	public function store(){



		$this->validate(request(), array(
			'txt-name' => 'required|min:5',
			'txt-password' => 'required|min:6|confirmed',
			'txt-mail' => 'required|email|unique:users,email'
			));

		$post = new Post();

		$post->title = request('txt-title');
		$post->body = request('txt-body');
		$post->user_id = auth()->user()->id;
		$post->created_at = date("Y-m-d H:i:s"); 

		$post->save();

		/*Post::create(
			request(array('title', 'body'))
			);

			Post::create(request()->all());*/

			return redirect('/');
		}
	}
