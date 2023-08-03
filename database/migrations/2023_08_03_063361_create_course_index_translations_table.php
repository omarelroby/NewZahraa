<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourseIndexTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('course_indexes_translations', function(Blueprint $table) {
			$table->increments('id');
            $table->text('name')->nullable();
            $table->string('locale')->index();
            $table->integer('course_indexes_id')->unsigned();
            $table->foreign('course_indexes_id')->references('id')->on('course_indexes')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('course_indexes_translations');
	}
}
