<?php

namespace App\Http\Controllers;
use App\Post;
use FPDF;

use Illuminate\Http\Request;

class PostsController extends Controller
{

	public function index(){

		//$posts = Post::all();
		$posts = Post::latest()->get();
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

		$this->validate(request(), array(
			'txt-title' => 'required',
			'txt-body' => 'required'
			));

		$post = new Post();

		$post->title = request('txt-title');
		$post->body = request('txt-body');
		$post->user_id = auth()->user()->id;
		$post->created_at = date("Y-m-d H:i:s"); 

		$post->save();

		/*
		Post::create(
		request(array('title', 'body'))
		);

		Post::create(request()->all());
		*/

		return redirect('/');

	}

	public function update(Post $post){

		//dd(request()->all());

		$this->validate(request(), array(
			'txt-title' => 'required',
			'txt-body' => 'required'
			));

		$post->title = request('txt-title');
		$post->body = request('txt-body');
		$post->updated_at = date("Y-m-d H:i:s"); 

		$post->save();

		return redirect('/perfil');

	}


	public function edit(Post $post){
		return view('posts.edit', compact('post'));
	}


	public function delete(Post $post){
		
		$data = Post::destroy($post->id);

		if($data == 1){
			return array(
				'mensaje' => 'Se elimino el post',
				'respuesta' => true
				);
		}

		return array(
			'mensaje' => 'No se pudo eliminar',
			'respuesta' => true
			);

		
	}

	public function pdf(POST $post){

		$pdf = new FPDF();
		$pdf->AddPage();

		/*Titulo*/
		$pdf->SetFont('Arial', 'B');
		$pdf->SetFontSize(20);
		$pdf->SetXY(20, 20);
		$pdf->Write(0, $post->title);

		/*Autor*/
		$pdf->SetFont('Arial');
		$pdf->SetFontSize(14);
		$pdf->SetXY(20, 30);
		$pdf->Write(0, "Escrito por: " . $post->user->name);

		/*Body*/
		$pdf->SetFont('Arial');
		$pdf->SetFontSize(12);
		$pdf->SetXY(20, 40);
		$pdf->MultiCell(100, 5, $post->body);


		$pdf->Output();
		exit();
	}

}
