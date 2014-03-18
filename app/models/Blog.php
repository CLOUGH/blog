<?php

class Blog extends \Eloquent {
	protected $fillable = [];

	public static function store($data){
		$blog = new Blog();
		$blog->title = $data['blog-title'];
		$blog->body = $data['blog-body'];
		$blog->save();
	}

}