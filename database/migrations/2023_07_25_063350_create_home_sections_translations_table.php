<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHomeSectionsTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('home_section_translations', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('home_section_id')->unsigned();
            $table->string('locale')->index();
			$table->string('title', 255);
			$table->string('button', 255);
			$table->text('description');
            $table->unique(['home_section_id', 'locale']);
            $table->foreign('home_section_id')->references('id')->on('home_sections')->onDelete('cascade');

        });
	}

	public function down()
	{
		Schema::drop('home_section_translations');
	}
}
