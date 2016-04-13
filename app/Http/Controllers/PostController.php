<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Post;
use App\PostType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$posts = Post::where('published',true)
            ->orderBy('date_published')
    		->get();

       	return view('posts.index')
       		->with(compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$post = Post::findOrFail($id);

    	if(!$post->is_published && Auth::guest()){
    		abort(403);
    	}
    	
        return view('posts.show')
        	->with(compact($post));
    }
}
