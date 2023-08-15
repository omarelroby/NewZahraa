<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndexesVideosTable extends Migration {

	public function up()
	{
		Schema::create('indexes_video', function(Blueprint $table) {
			$table->increments('id');
            $table->text('time_from')->nullable();
            $table->text('time_to')->nullable();
            $table->integer('indexes_video_id')->unsigned();
            $table->foreign('indexes_video_id')->references('id')->on('course_index_videos')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('indexes_video');
	}
}
