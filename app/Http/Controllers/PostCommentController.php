<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostCommentController extends Controller
{

    public function store($post_id, Request $request){
    	$validator = Validator::make($request->all(), [
    		'message' => 'required'
    	]);

    	$validator->sometimes(['first_name','last_name'], 'required|max:100', function($input){
    		return Auth::guest();
    	});
    	$validator->sometimes('email', 'required|email', function($input){
    		return Auth::guest();
    	});
    	// $validator->sometimes('user_id', 'required|max:100', function($input){
    	// 	return !Auth::guest();
    	// });
    	if($validator->fails()){
    		return back()->withErrors($validator)
                ->withInput();
    	}

    	$post = Post::findOrFail($post_id);
    	$post->comments()->create($request->only('first_name', 'last_name', 'message','email'));

    	return back();
    }
    public function update($post_id, Request $request){

    }

    public function delete($post_id, Request $request){

    }
}
