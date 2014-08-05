<?php

class BlogsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->beforeFilter('auth',array( 'only'=>array('create')));
		$this->navbar = array('home'=>'','blog'=>'active','about'=>'');

	}

	public function index()
	{
		$blogs = Blog::all();
		return  View::make('blogs.index')->with('blogs',$blogs)
			->with('navbar',$this->navbar);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('blogs.create')->with('navbar',$this->navbar);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input_data = Input::all();
		$new_blog = Blog::createBlog($input_data);

		return  Redirect::route('blog.show',$new_blog->id);
	}


	public function storeComment()
	{
		$input_data = Input::all();
		//TODO: Implement addComment
		$blog_comment = Comment::storeBlogComment($input_data);

		return Redirect::route('blog.show',$input_data['blog-id']);
	}

	public function storeReplyComment()
	{
		$data = Input::all();
		$reply_comment = Comment::storeReplyComment($data);

		return Redirect::route('blog.show',$data['blog-id']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$blog = Blog::with('blogComment')->find($id);
		$blog_comments = $blog->blogComment;
	

		$active_views = array('main-menu'=>array(),
			'edit-bar'=>array('show'=>'active', 'edit'=>''));

		return View::make('blogs.show')->with('blog',$blog)
			->with('active_views',$active_views)
			->with('navbar',$this->navbar)
			->with('blog_comments',$blog_comments);;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$blog = Blog::find($id);
		$active_views = array('main-menu'=>array(),
			'edit-bar'=>array('show'=>'', 'edit'=>'active'));

		return View::make('blogs.edit')->with('blog',$blog)
			->with('active_views',$active_views)
			->with('navbar',$this->navbar);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input_data = Input::all();
		$blog = Blog::find($id);
		$blog->updateData($input_data);
		return Redirect::route('blog.show',$id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$blog = Blog::find($id);
		$blog->delete();
		return Redirect::route('blog.index');
	}



}