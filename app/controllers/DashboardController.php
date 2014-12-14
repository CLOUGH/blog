<?php
class DashboardController extends BaseController
{
	
	public function __construct()
	{
		$this->navbar = array('home'=>'active','blog'=>'','about'=>'');

	}

	public function index()
	{
		return View::make('dashboard.index')
			->with('navbar',$this->navbar);
	}
}

?>