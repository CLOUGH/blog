<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomePageTest extends TestCase
{
    public function testHomePageLoads(){
    	$this->visit('/')
    		->seeStatusCode(200)
    		->see("Welcome to my website");
    }
}
