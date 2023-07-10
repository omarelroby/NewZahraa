<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEbookTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('ebook_translations', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('ebook_id')->unsigned();
            $table->string('locale')->index();
			$table->string('title', 255);
			$table->text('summary');
            $table->unique(['ebook_id', 'locale']);
            $table->foreign('ebook_id')->references('id')->on('ebooks')->onDelete('cascade');

        });
	}

	public function down()
	{
		Schema::drop('ebook_translations');
	}
}
