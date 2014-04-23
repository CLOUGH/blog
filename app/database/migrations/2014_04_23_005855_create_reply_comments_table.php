<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReplyCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reply_comments', function(Blueprint $table)
		{
			$table->integer('comment_id')->refrences('id')->on('comments')->onDelete('cascade');
			$table->integer('reply_comment_id')->refrences('id')->on('commnets');
			$table->timestamps();
			$table->primary(array('comment_id','reply_comment_id'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reply_comments');
	}

}
