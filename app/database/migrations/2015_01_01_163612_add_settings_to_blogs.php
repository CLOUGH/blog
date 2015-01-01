<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddSettingsToBlogs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('blogs', function(Blueprint $table)
		{
			$table->unsignedInteger('status_id')->refrences('id')->on('status')->onDelete('cascade');;
			$table->unsignedInteger('visibility_id')->refrences('id')->on('visibility')->onDelete('cascade');;
			$table->unsignedInteger('featured_img')->default(0);
			$table->dateTime('published')->default(DB::raw('now()::timestamp(0)'));
			$table->unsignedInteger('author_id')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('blogs', function(Blueprint $table)
		{
			$table->dropColumn('status_id');
			$table->dropColumn('visibility_id');
			$table->dropColumn('featured_img');
			$table->dropColumn('published');
			$table->dropColumn('author_id');
		});
	}

}
