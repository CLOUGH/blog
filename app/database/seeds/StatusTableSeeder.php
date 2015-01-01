<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class StatusTableSeeder extends Seeder {

	public function run()
	{

		Status::create([
			'name'=>'Published'
		]);

		Status::create([
			'name'=>'Draft'
		]);
		Status::create([
			'name'=>'Pending Review'
		]);
	}

}