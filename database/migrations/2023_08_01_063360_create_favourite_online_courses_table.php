<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFavouriteOnlineCoursesTable extends Migration {

	public function up()
	{
		Schema::create('favourite_online_courses', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
			$table->integer('online_course_id')->unsigned();
            $table->foreign('online_course_id')->references('id')->on('online_courses')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('favourite_online_courses');
	}
}
