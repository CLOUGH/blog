<?php

class Blog extends \Eloquent {
	protected $fillable = ['body','title','status_id','visibility_id'];

	/**
	 * @param $data
	 * @return Blog
	 */
	public static function createBlog($data){

		$blog = Blog::create([
			'status_id'=>$data['status'],
			'visibility_id' =>$data['visibility'],
			'author_id' => Auth::user()->id,
			'featured_img' => '0',
			'body' => $data['blog-body'],
			'title'=> $data['blog-title']
		]);
		return $blog;
	}

	/**
	 * Get all the blogs for both public and authenticated users
	 * @return mixed
	 */
	public static function getAll()
	{
		// anonymous callback function used  to create new array map of collection
		$reduce_function = function($result,$item){
			$result[$item->id] = $item->name;
			return $result;
		};
		//Use laravel collection method reduce (PHP array_reduce) to create associated map of a collection
		$status = Status::all()->reduce($reduce_function,array());
		$visibility = Visibility::all()->reduce($reduce_function,array());

		$status_published_id = array_search('Published',$status);
		$visibility_public_id = array_search('Public',$visibility);
		$visibility_private_id = array_search('Private',$visibility);
		$visibility_protected_id = array_search('Password Protected',$visibility);

		if(Auth::check()){
			/**
			 * get all the blog post whose visibility is public
			 * or whose visibility is private and  author is the same
			 * or whose visibility is password protected
			 */
			$blogs = Blog::where('visibility_id','=',$visibility_public_id)
				->orWhere(function($query) use($visibility_private_id){
					$query->where('visibility_id','=',$visibility_private_id)
						->where('author_id','=',Auth::user()->id);
				})
				->orWhere(function($query) use($visibility_protected_id){
					$query->where('visibility_id','=',$visibility_protected_id);
				})->get();
		}
		else{
			/**
			 * Get all the blog post whose visibility is public and is published
			 */
			$blogs = Blog::where('status_id','=',$status_published_id)
				->where('visibility_id','=',$visibility_public_id)->get();
		}
		return $blogs;
	}
	public function updateData($data)
	{
		$this->title = $data['title'];
		$this->body = $data['body'];
		$this->status_id = $data['status'];
		$this->visibility_id = $data['visibility'];
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
	public function status()
	{
		return $this->belongsTo('Status');
	}
	public function visibility()
	{
		return $this->belongsTo('Visibility');
	}
}