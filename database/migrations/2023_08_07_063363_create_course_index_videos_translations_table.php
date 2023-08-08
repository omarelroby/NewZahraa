<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourseIndexVideosTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('course_index_videos_translations', function(Blueprint $table) {
			$table->increments('id');
            $table->text('title')->nullable();
            $table->string('locale')->index();
            $table->integer('course_indexes_videos_id')->unsigned();
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('course_index_videos_translations');
	}
}
