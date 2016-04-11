<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CommingSoonPageTest extends TestCase
{
    public function testCommingSoonPageLoads(){
    	$this->visit('/coming-soon')
    		->see('Coming Soon')
    		->seeStatusCode(200);
    }

    // public function testCommingSoonMiddlewareRedirectsToCommingSoonPage(){
    	
    // 	setenv('APP_COMING_SOON',false);
    // 	$this->visit('/')
    // 		->seeStatusCode(200)
    // 		->see("Hi I'm Warren. I'm Software Developer")
    // 		->see('Welcome to my website');

    // 	setenv('APP_COMING_SOON',true);
    // 	$this->visit('/')
    // 		->seePageIs('/coming-soon');
    // }
}