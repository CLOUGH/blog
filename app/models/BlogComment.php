<?php

class BlogComment extends \Eloquent {
	protected $fillable = [];
	protected $table = "blog_comments";

	public function comments()
	{
		return $this->hasOne('Comment','id','comment_id');
	}
	
}