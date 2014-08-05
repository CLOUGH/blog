<?php

class Page extends \Eloquent {
	protected $fillable = [];

	public function update(array $data=array())
	{
		$this->content = $data['content'];
		$this->save();
	}
	public static function create(array $data=array()){
		$page = new Page();
		$page->route = $data['route'];
		$page->content = $data['content'];
		$page->save();

		return $page;
	}

}