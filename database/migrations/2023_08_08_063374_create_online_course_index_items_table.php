<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOnlineCourseIndexItemsTable extends Migration {

	public function up()
	{
		Schema::create('online_course_index_items', function(Blueprint $table) {
			$table->increments('id');
             $table->integer('online_course_indexes_id')->unsigned();
            $table->foreign('online_course_indexes_id')->references('id')->on('online_course_indexes')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('online_course_index_items');
	}
}
