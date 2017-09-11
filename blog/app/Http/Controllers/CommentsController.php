<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
	public function store(Post $post){

    	/*
    	$this->validate(request(), array(
    		'txt-comment' => 'required', ));

    	$comment = new Comment();
    	$comment->post_id = $post->id;
    	$comment->user_id = $post->id;
    	$comment->body = $post->id;

    	$comment->save();
    	*/

    	if(request('txt-comment')==''){
    		return array(
    			'respuesta'=>false,
    			'mensaje' => 'Ingresa un comentario'
    			);
    	}

    	$comment = new Comment();
    	$comment->post_id = $post->id;
    	$comment->user_id = auth()->user()->id;
    	$comment->body = request('txt-comment');

    	$comment->save();

    	return array(
    		'mensaje' => 'comentario agregado',
    		'respuesta'=>true,
    		'data' => array(
    			'fecha' => $comment->created_at->diffForHumans(),
    			'nombre'=>$comment->user->name,
    			'comentario'=>$comment->body
    			)
    		);

    }

    public function delete(Post $post){
    	Post::destroy($post->id);
    	return array('mensaje' => 'Se elimino el post');;
    }
}
