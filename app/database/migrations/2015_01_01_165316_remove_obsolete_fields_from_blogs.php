<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RemoveObsoleteFieldsFromBlogs extends Migration {

	/**
	 * Run the migrations.
	 *Remove old fields such as description, image columns
	 * @return void
	 */
	public function up()
	{
		Schema::table('blogs', function(Blueprint $table)
		{
			$table->dropColumn('image');
			$table->dropColumn('description');
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
			
		});
	}

}
