<?php

class Comment extends \Eloquent {
	protected $fillable = ['comment','author'];
	protected $table = "comments";

	public function blog(){
		return $this->belongsTo('BlogComment');
	}
	public function replyComments()
	{
		return $this->hasMany('ReplyComment','comment_id');
	}

}