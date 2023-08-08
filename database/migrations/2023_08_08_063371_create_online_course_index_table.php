<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOnlineCourseIndexTable extends Migration {

	public function up()
	{
		Schema::create('online_course_indexes', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('online_course_id')->unsigned();
            $table->foreign('online_course_id')->references('id')->on('online_courses')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('online_course_indexes');
	}
}
