<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideshowImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slideshow_image', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slideshow_id')->unsigned();
            $table->integer('image_id')->unsigned();
            $table->integer('order')->unsigned();
            $table->timestamps();

            $table->foreign('slideshow_id')->references('id')->on('slideshows')->onDelete('cascade');
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('slideshow_image');
    }
}
