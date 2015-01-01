<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class BlogsTableSeeder extends Seeder {

public function run()
	{
		DB::table('blogs')->delete();
		Blog::create([
			'title'=>'Site Creation',
			'body'=>"<p>Ive dicided to create a my own website to use some of the tools that are now popular in online comunity. The site also serves a&nbsp; project by which I should be able to test some of my skills that i have aquired over the years as a computer programmer and to test how well do I adopt to these new technlogies. So in essense the site should both market my self a qualified web developer and also serves as a means by which I can sharpen my skills.</p>
					<p>The site is a custom CMS built using the Laravel 4 MVC framework, which I must say I&#39;m really liking it. Unlike Wordpress and those other popluar CMS which stores all the the page information behind a content panel, this site tries emulates the Plones take on content management system, without the XML templating. What this means is that when you logged to the site for the page your on the option is there to change the content directly. I think its a more intuitive way of managin content on a site. You get the direct instant feed back when you click the save button.</p>
					<p>Your probably wondering also why did I even bother to go through the hassle of building my own CMS when there are proably more full featured ones out there. Well for one I wanted to test my skill, and I wanted to demonstrate my understanding of Laravel and the MVC framwork.</p>",
			'author_id'=>'1',
			'visibility_id'=>'1',
			'status_id'=>'1',
			'featured_img'=>'0'
		]);
		Blog::create([
			'title'=>'Lorem ipsum',
			'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent massa ipsum, pulvinar venenatis maximus at, scelerisque eu dui. Praesent tempus neque tellus, a rhoncus libero feugiat eget. Praesent tempor arcu ac mattis bibendum. Mauris et sapien semper, luctus est in, efficitur magna. Praesent pulvinar quam a est mattis, id gravida erat sagittis. Nunc gravida porta metus, sed mattis metus. Aliquam luctus sollicitudin leo congue imperdiet. Suspendisse pretium ipsum non est iaculis aliquam. Suspendisse eu est ac mauris eleifend congue. Duis pulvinar porta tristique. Vestibulum id mauris at odio malesuada volutpat sit amet sit amet justo. Nunc ornare augue eu pretium suscipit. Aliquam erat volutpat. Nullam fringilla ultricies nulla id ultricies. Phasellus tellus tellus, rhoncus vel iaculis quis, posuere consectetur arcu.</p>
					<p>Proin viverra quam vehicula bibendum vulputate. Quisque vitae sem ac risus iaculis pretium sed sed est. Mauris congue turpis a mollis tincidunt. Mauris purus nisl, accumsan sed maximus vitae, ornare eu eros. Vestibulum sodales tortor a dui vestibulum, fringilla tempor lectus maximus. In malesuada ullamcorper dolor nec tincidunt. Ut ligula tellus, tristique in pulvinar a, volutpat sit amet justo. Pellentesque tempor ullamcorper nibh in pretium.</p>',
			'author_id'=>'1',
			'visibility_id'=>'1',
			'status_id'=>'1',
			'featured_img'=>'0'
		]);

	}
}
