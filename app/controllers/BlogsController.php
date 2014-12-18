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
		$input_data =array (
			'blog-id'=>Input::get('blog-id'),
			'comment'=>Input::get('comment'),
			'author'=>Input::get('author')
		);
		$blog = Blog::findOrFail($input_data['blog-id']);
		$blog->storeComment($input_data);
		return Redirect::route('blog.show',$input_data['blog-id']);
	}

	public function storeReplyComment()
	{
		$data = Input::all();
		$reply_comment = Blog::storeReplyComment($data);

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
		$blog = Blog::with('comments')->find($id);
	

		return View::make('blogs.show')->with('blog',$blog)
			->with('navbar',$this->navbar);
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

		return View::make('blogs.edit')->with('blog',$blog)
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