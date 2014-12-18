<?php

class Blog extends \Eloquent {
	protected $fillable = [];

	public static function createBlog($data){
		$blog = new Blog();
		$blog->title = $data['blog-title'];
		$blog->body = $data['blog-body'];
		$blog->save();

		return $blog;
	}
	public function updateData($data)
	{

		$this->title = $data['title'];
		$this->body = $data['body'];
		$this->save();
	}
	public function storeComment($data)
	{
		DB::beginTransaction();

		try{
			$newComment = Comment::create([
				"comment"=>$data['comment'],
				"author"=>$data['author']
			]);
		}catch(\Exception $e)
		{
		    DB::rollback();
		    throw $e;
		}

		try{
			$newBlogComment = BlogComment::create([
				"blog_id"=>$this->id,
				"comment_id"=>$newComment->id
			]);
		}catch(\Exception $e)
		{
		    DB::rollback();
		    throw $e;
		}
		DB::commit();	
	}
	public function storeReplyComment($data)
	{
		DB::beginTransaction();
		$comment = null;
		$reply_comment = null;


		try{
			$comment = new Comment();
			$comment->comment= $data['comment'];
			$comment->author = $data['author'];
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

	public function bodyExcerpt(){

		return substr($this->body, 0, 1500);	
	}

	public function comments()
	{
		return $this->hasMany('BlogComment');
	}
}