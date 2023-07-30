<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOnlineCoursesTable extends Migration {

	public function up()
	{
		Schema::create('online_courses', function(Blueprint $table) {
			$table->increments('id');
            $table->string('price', 255)->nullable();
            $table->string('hours', 255)->nullable();
            $table->string('image', 255);
            $table->string('lessons_number', 255);
            $table->date('date')->nullable();
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('online_courses');
	}
}
