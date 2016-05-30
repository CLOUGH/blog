<?php

use App\PortfolioCategory;
use Illuminate\Database\Seeder;

class PortfolioCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PortfolioCategory::firstOrCreate([
        	'name' => 'Design'
        ]);

        PortfolioCategory::firstOrCreate([
        	'name' => 'Web Application'
        ]);
    }
}
