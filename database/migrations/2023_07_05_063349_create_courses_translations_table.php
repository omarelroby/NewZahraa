<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('course_translations', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('course_id')->unsigned();
            $table->string('locale')->index();
			$table->string('title', 255);
			$table->text('description');
            $table->unique(['course_id', 'locale']);
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');

        });
	}

	public function down()
	{
		Schema::drop('course_translations');
	}
}
