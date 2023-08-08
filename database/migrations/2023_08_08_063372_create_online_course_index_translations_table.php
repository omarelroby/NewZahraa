<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOnlineCourseIndexTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('online_course_indexes_translations', function(Blueprint $table) {
			$table->increments('id');
            $table->text('title')->nullable();
            $table->string('locale')->index();
            $table->integer('online_course_indexes_id')->unsigned();
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('online_course_indexes_translations');
	}
}
