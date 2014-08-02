<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogComments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog_comments', function(Blueprint $table) {
			$table->integer('blog_id')->refrences('id')->on('blogs')->onDelete('cascade');
			$table->integer('comment_id')->refrences('id')->on('commnets')->onDelete('cascade');
			$table->timestamps();

			$table->primary(array('blog_id','comment_id'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blog_comments');
	}

}
