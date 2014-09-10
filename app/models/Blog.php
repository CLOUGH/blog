<?php

class Blog extends \Eloquent {
	protected $fillable = [];

	public static function createBlog($data){
		$blog = new Blog();
		$blog->title = $data['blog-title'];
		//$blog->image = $data['blog-image'];
		//$blog->description=$data['blog-description'];
		$blog->body = $data['blog-body'];
		$blog->save();

		return $blog;
	}
	public function updateData($data)
	{

		$this->title = $data['title'];
		$this->body = $data['body'];
		//$this->image = $data['image'];
		//$this->description=$data['description'];
		$this->save();
	}
	public function storeComment($data)
	{

		DB::beginTransaction();
		$comment=null;
		$blog_comment=null;

		try{

			$comment = new Comment();
			$comment->comment = $data['comment'];
			$comment->author = $data['author'];
			$comment->save();

			$blog_comment = new BlogComment();
			$blog_comment->blog_id  = $this->id;
			$blog_comment->comment_id = $comment->id;
			$blog_comment->save();


		}catch(Exception $e){
			echo "Error: $e";
			DB::rollback();
			return $e;
		}
		DB::commit();

		return $comment;
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

	public function comment()
	{
		return $this->hasMany('BlogComment');
	}
}