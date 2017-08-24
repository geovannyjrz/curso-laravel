<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{

	public function index(){

		$posts = Post::all();
		return view('posts.index', compact('posts'));

	}

	public function show(Post $post){

		return view('posts.show', compact('post'));

	}

	public function create(){

		return view('posts.create', compact('post'));

	}

	public function store(){

		//dd(request()->all());

		$post = new Post();

		$post->title = request('txt-title');
		$post->body = request('txt-body');

		$post->save();

		Post::create(
			request(array('title', 'body'))
			);

		Post::create(request()->all());

		return redirect('/');
	}

}
