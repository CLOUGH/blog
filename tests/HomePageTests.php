<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomePageTests extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomePageLoads(){
    	$this->visit('/')
    		->see("Hi I'm Warren. I'm Software Developer.");
    }
}
