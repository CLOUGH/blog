<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VisibilityTableSeeder extends Seeder {

	public function run()
	{
		Visibility::create([
			'name'=>'Public'
		]);
		Visibility::create([
			'name'=>'Private'
		]);
		Visibility::create([
			'name'=>'Password Protected'
		]);
	}
}