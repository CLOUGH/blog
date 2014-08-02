<?php

// Composer: "fzaninotto/faker": "v1.4.0"

class UserTableSeeder extends Seeder {

	public function run()
	{

		DB::table('users')->delete();
		User::create(array(
			'fname' => 'Warren',
			'lname' => 'Clough',
			'email' => 'clough.warren@gmail.com',
			'username'=> 'admin',
			'password' =>Hash::make('pass1234')
		));
		
	}

}
