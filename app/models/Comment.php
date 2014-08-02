<?php

class Comment extends \Eloquent {
	protected $fillable = [];
	protected $table = "comments";

	static function storeBlogComment($data)
	{
		DB::beginTransaction();
		$comment=null;
		$blog_comment=null;

		try{

			$comment = new Comment();
			$comment->comment = $data['blog-comment'];
			$comment->user_name = $data['user-name'];
			$comment->save();

			$blog_comment = new BlogComment();
			$blog_comment->blog_id  = $data['blog-id'];
			$blog_comment->comment_id = $comment->id;
			$blog_comment->save();


		}catch(Exception $e){
			DB::rollback();
			return $e;
		}
		DB::commit();

		return $comment;
	}
	public static function storeReplyComment($data)
	{
		DB::beginTransaction();
		$comment = null;
		$reply_comment = null;


		try{
			$comment = new Comment();
			$comment->comment= $data['reply-comment'];
			$comment->user_name = $data['user-name'];
			$comment->save();		

			$reply_comment = new ReplyComment();
			$reply_comment->reply_comment_id = $comment->id;
			$reply_comment->comment_id =  $data['comment-id'];
			$reply_comment->save();

		}catch(Exception $e)
		{
			DB::rollback();
			return $e;
		}
		DB::commit();

		return $comment;
	}

	public function blog(){
		return $this->belongsTo('BlogcComment');
	}
	public function replyComments()
	{
		return $this->hasMany('ReplyComment','comment_id');
	}

}