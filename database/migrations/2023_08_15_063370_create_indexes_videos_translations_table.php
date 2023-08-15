<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndexesVideosTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('indexes_video_translations', function(Blueprint $table) {
			$table->increments('id');
            $table->text('title')->nullable();
            $table->string('locale')->index();
            $table->integer('indexes_video_id')->unsigned();
            $table->foreign('indexes_video_id')->references('id')->on('indexes_video')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('indexes_video_translations');
	}
}
