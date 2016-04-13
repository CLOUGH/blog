<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
        	'name' => 'Admin',
        	'email' => 'admin@warrenclough.me',
        	'password' => 'password'
        ]);
    }
}
