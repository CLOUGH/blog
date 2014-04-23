<?php

class Blog extends \Eloquent {
	protected $fillable = [];

	public static function createBlog($data){
		$blog = new Blog();
		$blog->title = $data['blog-title'];
		$blog->image = $data['blog-image'];
		$blog->description=$data['blog-description'];
		$blog->body = $data['blog-body'];
		$blog->save();

		return $blog;
	}
	public function updateData($data)
	{

		$this->title = $data['title'];
		$this->body = $data['body'];
		$this->image = $data['image'];
		$this->description=$data['description'];
		$this->save();
	}

	public function bodyExcerpt(){

		return substr($this->body, 0, 1500);
		//use this way if using mysql-db
		//$excerpt = DB::table('blogs')->select(DB::raw('LEFT(body,100) as excerpt'))->where('id','=',$this->id)->get();
		//return $excerpt['excerpt'];

		//dd($excerpt);		
	}

	public function blogComment()
	{
		return $this->hasMany('BlogComment');
	}
}