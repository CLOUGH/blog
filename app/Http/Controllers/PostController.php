<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Post;
use App\PostType;
use Carbon\Carbon;
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
    	$posts = Post::published()
            ->orderBy('publish_on')
            ->paginate(10);

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
    	$post = Post::where(function($q){
            if(Auth::guest()){
                $q->where('published',true);
                // $q->where('publish_on','>=', Carbon::now());
            }            
        })->where('id',$id)
            ->first();

        if(!$post){
            abort(404);
        }

        return view('posts.show')
        	->with(compact('post'));
    }
}
