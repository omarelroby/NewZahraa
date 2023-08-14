<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuizesTable extends Migration {

	public function up()
	{
		Schema::create('quiz', function(Blueprint $table) {
			$table->increments('id');
            $table->text('quiz_name')->nullable();
            $table->text('degree')->nullable();
            $table->tinyInteger('is_discount')->default(0);
            $table->decimal('discount')->nullable();
            $table->decimal('discount_score')->nullable();
            $table->decimal('pass_score')->nullable();
            $table->integer('instructor_id')->unsigned();
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('cascade');
            $table->integer('online_course_id')->unsigned();
            $table->foreign('online_course_id')->references('id')->on('online_courses')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('quiz');
	}
}
