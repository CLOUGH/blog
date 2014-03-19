<?php

class BlogsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$blogs = Blog::all();
		return  View::make('blogs.index')->with('blogs',$blogs);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('blogs.create');
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

		return  Redirect::route('blogs.show',$new_blog->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$blog = Blog::find($id);
		$active_views = array('main-menu'=>array(),
			'edit-bar'=>array('show'=>'active', 'edit'=>''));

		return View::make('blogs.show')->with('blog',$blog)
			->with('active_views',$active_views);
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
			->with('active_views',$active_views);
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
		return Redirect::route('blogs.show',$id);
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
		return Redirect::route('blogs.index');
	}

}