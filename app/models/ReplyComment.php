<?php

class ReplyComment extends \Eloquent {
	protected $fillable = [];
	protected $table="reply_comments";

	public function comment()
	{
		return $this->hasOne('Comment','id','reply_comment_id');
	}
}