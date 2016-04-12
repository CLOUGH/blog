<?php

use Illuminate\Database\Seeder;

class PostTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	PostType::create([
       		'name'=>'Video',
       		'slug'=> 'video',
       	]);
       	PostType::create([
       		'name'=>'Image',
       		'slug'=> 'image',
       	]);
       	PostType::create([
       		'name'=>'Slider',
       		'slug'=> 'slider',
       	]);
       	PostType::create([
       		'name'=>'Audio',
       		'slug'=>'audio',
       	]);
       	PostType::create([
       		'name'=>'Quote',
       		'slug'=>'quote',
       	]);
       	PostType::create([
       		'name'=>'Popup Video',
       		'slug'=>'popup_video',
       	]);

    }
}
