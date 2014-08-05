<?php

class AboutController extends \BaseController {
	public function __construct()
	{
		$this->navbar = array('home'=>'','blog'=>'','about'=>'active');

	}
	/**
	 * Display a listing of the resource.
	 * GET /about
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = array();
		$page = Page::where('route',"=",'about')->first();
		return View::make('about.index', $data)
			->with('navbar',$this->navbar)
			->with('page',$page);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /about/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /about
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /about/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /about/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = array();
		$page = Page::where('route',"=",'about')->first();
		return View::make('about.edit', $data)
			->with('navbar',$this->navbar)
			->with('page',$page);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /about/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input_data = Input::all();
		$page = Page::where('route',"=",'about')->first();
		if(empty($page))
		{
			$input_data['route'] = 'about';
			$page = Page::create($input_data);
		}
		else
		{			
			$page->update($input_data);
		}
		return Redirect::route('about.index');	
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /about/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}