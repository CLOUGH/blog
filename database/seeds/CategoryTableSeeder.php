<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::firstOrCreate(['name'=> 'Laravel']);
        Category::firstOrCreate(['name'=> 'AngularJS']);
        Category::firstOrCreate(['name'=> 'Web Application']);
    }
}
