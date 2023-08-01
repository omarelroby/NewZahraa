<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFreeVideoTable extends Migration {

	public function up()
	{
		Schema::create('free_videos', function(Blueprint $table) {
			$table->increments('id');
            $table->text('slug')->nullable();
            $table->string('youtube_url', 255)->nullable();
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('free_videos');
	}
}
