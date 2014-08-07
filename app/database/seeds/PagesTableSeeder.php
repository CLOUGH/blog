<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class PagesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('pages')->delete();
		Page::create([
			'route'=>'home',
			'content'=>'<p><strong>Welcome</strong></p>
						<p>Hi there there my name is Warren Clough, and I&#39;m glad you made it here to my site. The main purpose of this site was share information about myself. For example previous projects, contact information, current projects, and general information about myself. I know at times it can be difficult to find the relevant information for ones query on the Internet especially when it about someone. You&#39;re given raw data that is unrelated, disjointed and irrelevant. I therefore would like to have some amount control over the information being shared about myself.</p>
						<p>This site is working progress and I try to update it on a regular basis.</p>
						<p><strong>About Me</strong></p>
						<p>As stated before my name is Warren Clough, I studied at the University of The West Indies in the field Computer Science for three year and complete my Bachelors degree in 2014. Now I am Computer Scientist/Programmer trying solve the next big problem, so that I can recognize by my peers, and colleges, and to be successful in this game call life.</p>
						<p>From my early age I was always trilled by the idea of making stuff whether it be a toy, a drawing or simple some electronic circuit for radio transmitter or power supply. The feeling of knowing that whats in front of you was created by you was always satisfying.</p>
						<p>I was always fascinated by computers and how they worked. When I receive my first cell phone that could access the Internet my fascination began to took form and I was really inteuge by the idea of creating my own website that could store my picture, ringtones and J2ME game. I then began learning WML to create my first WAP site. It was really fun. Especially when all the coding was done on phone. In my efforts to learn more I spent most of my recess time in computer labs reading about WML. To be honest most of it didn&#39;t make sense at the time however someone who was studying computer science start noticing my fascination. I was then introduced my to Java. The idea of me writing a piece of code that controls the computer consumed me, and it was at that point I decided that I wanted to become a computer programmer.</p>'

		]);
		Page::create([
			'route'=>'about',
			'content'=>'<p>The site was created using the Laravel MVC Framework</p>'
		]);
	
	}

}
