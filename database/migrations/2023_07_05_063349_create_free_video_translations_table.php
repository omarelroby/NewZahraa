<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFreeVideoTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('free_video_translations', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('free_video_id')->unsigned();
            $table->string('locale')->index();
			$table->string('title', 255);
			$table->text('description');
            $table->unique(['free_video_id', 'locale']);
            $table->foreign('free_video_id')->references('id')->on('free_videos')->onDelete('cascade');

        });
	}

	public function down()
	{
		Schema::drop('free_video_translations');
	}
}
