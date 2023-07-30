<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOnlineCoursesTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('online_course_translations', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('online_course_id')->unsigned();
            $table->string('locale')->index();
			$table->string('title', 255);
			$table->text('description');
            $table->unique(['online_course_id', 'locale']);
            $table->foreign('online_course_id')->references('id')->on('online_courses')->onDelete('cascade');

        });
	}

	public function down()
	{
		Schema::drop('online_course_translations');
	}
}
