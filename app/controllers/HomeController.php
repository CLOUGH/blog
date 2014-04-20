<?php

class HomeController extends BaseController {
	public function __construct()
	{
		$this->navbar = array('home'=>'','blog'=>'active','contact'=>'','about'=>'');

	}
	public function index(){

		$data = [];
		return View::make('home.index', $data)
			->with('navbar',$this->navbar);
	}

}