<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideosTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('videos_translations', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('videos_id')->unsigned();
            $table->string('locale')->index();
			$table->string('title', 255);
			$table->text('description');
            $table->unique(['videos_id', 'locale']);
            $table->foreign('videos_id')->references('id')->on('videos')->onDelete('cascade');

        });
	}

	public function down()
	{
		Schema::drop('videos_translations');
	}
}
