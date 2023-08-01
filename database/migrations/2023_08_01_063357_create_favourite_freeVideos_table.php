<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFavouriteFreeVideosTable extends Migration {

	public function up()
	{
		Schema::create('favourite_free_videos', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
			$table->integer('free_videos_id')->unsigned();
            $table->foreign('free_videos_id')->references('id')->on('free_videos')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('favourite_free_videos');
	}
}
