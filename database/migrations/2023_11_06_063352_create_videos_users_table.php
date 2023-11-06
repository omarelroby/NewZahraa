<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideosUsersTable extends Migration {

	public function up()
	{
		Schema::create('user_videos', function(Blueprint $table) {
			$table->increments('id');
             $table->integer('user_id')->unsigned();
            $table->integer('video_id')->unsigned();
             $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('user_videos');
	}
}
