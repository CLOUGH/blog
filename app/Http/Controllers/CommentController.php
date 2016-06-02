<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    
    public function storeReply($comment_id, Request $request){
    	$validator = Validator::make($request->all(), [
    		'message' => 'required'
    	]);

    	$validator->sometimes(['first_name','last_name'], 'required|max:100', function($input){
    		return Auth::guest();
    	});
    	$validator->sometimes('email', 'required|email', function($input){
    		return Auth::guest();
    	});
    	if($validator->fails()){
    		return back()->withErrors($validator)
                ->withInput();
    	}

    	$comment = Comment::findOrFail($comment_id);
    	$comment->replies()->create($request->only('first_name', 'last_name', 'message','email'));

    	return back();
    }
}
