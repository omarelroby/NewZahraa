<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideosIndexesTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('videos_indexes_translations', function(Blueprint $table) {
			$table->increments('id');
            $table->text('title')->nullable();
            $table->string('locale')->index();
            $table->integer('videos_indexes_id')->unsigned();
            $table->foreign('videos_indexes_id')->references('id')->on('videos_indexes')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('videos_indexes_translations');
	}
}
