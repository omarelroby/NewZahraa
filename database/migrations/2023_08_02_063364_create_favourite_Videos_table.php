<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFavouriteVideosTable extends Migration {

	public function up()
	{
		Schema::create('favourite_videos', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
			$table->integer('videos_id')->unsigned();
            $table->foreign('videos_id')->references('id')->on('videos')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('favourite_videos');
	}
}
