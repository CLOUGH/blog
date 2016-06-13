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
        if(User::where('email','admin@warrenclough.me')->count()==0){
            User::firstOrCreate([
            	'name' => 'Admin',
            	'email' => 'admin@warrenclough.me',
            	'password' => 'password'
            ]);
            
        }
    }
}
