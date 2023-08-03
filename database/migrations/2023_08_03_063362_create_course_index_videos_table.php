<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourseIndexVideosTable extends Migration {

	public function up()
	{
		Schema::create('course_index_videos', function(Blueprint $table) {
			$table->increments('id');
            $table->text('video')->nullable();
            $table->integer('is_free')->default(0);
            $table->integer('course_indexes_id')->unsigned();
            $table->foreign('course_indexes_id')->references('id')->on('course_indexes')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('course_index_videos');
	}
}
