<?php

use App\PostType;
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
       	PostType::firstOrCreate([
       		'name'=>'Video',
       		'slug'=> 'video',
       	]);
       	PostType::firstOrCreate([
       		'name'=>'Image',
       		'slug'=> 'image',
       	]);
       	PostType::firstOrCreate([
       		'name'=>'Slider',
       		'slug'=> 'slider',
       	]);
       	PostType::firstOrCreate([
       		'name'=>'Audio',
       		'slug'=>'audio',
       	]);
       	PostType::firstOrCreate([
       		'name'=>'Quote',
       		'slug'=>'quote',
       	]);
       	PostType::firstOrCreate([
       		'name'=>'Popup Video',
       		'slug'=>'popup_video',
       	]);
        PostType::firstOrCreate([
          'name'=>'Standard',
          'slug'=>'standard',
        ]);

    }
}
