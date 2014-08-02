<?php

class HomeController extends BaseController {
	public function __construct()
	{
		$this->navbar = array('home'=>'','blog'=>'active');

	}
	public function index(){
		$blogPosts = Blog::all();

		$data = [];
		return View::make('home.index', $data)
			->with('navbar',$this->navbar)
			->with('blogPosts',$blogPosts);
	}
	public function showLogin()
	{
		$data = array();
		return View::make('home.login', $data);
	}

	public function doLogin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			'username'    => 'required|alphaNum|min:3', 
			'password' => 'required|min:1'
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);
		var_dump($validator->fails());

		if ($validator->fails()) {
			return Redirect::route('home.login')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} 
		else {
			$userdata = array(
				'username' 	=> Input::get('username'),
				'password' 	=> Input::get('password')
			);

			if (Auth::attempt($userdata)) {
				return Redirect::route('home.index');

			} 
			else {	 	
				return Redirect::route('home.login')
					->withErrors('Incorrect username or password.')
					->withInput(Input::except('password'));

			}

		}
	}

}