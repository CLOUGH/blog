<?php

class HomeController extends BaseController {
	public function index(){

		$data = [];
		return View::make('home.index', $data);
	}

}