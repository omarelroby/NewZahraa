<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('page_translations', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('page_id')->unsigned();
            $table->string('locale')->index();
			$table->string('title', 255);
			$table->text('description');
            $table->unique(['page_id', 'locale']);
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');

        });
	}

	public function down()
	{
		Schema::drop('page_translations');
	}
}
