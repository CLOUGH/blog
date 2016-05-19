<?php

use App\Tag;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class TagResourceTest extends TestCase
{
	use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCanGetTags()
    {
    	Tag::create(['name'=>'test']);

    	$this->get('api/tags')
    		->seeStatusCode(200)
    		->seeJson(['name'=>'test']);
    }
}
