<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentQuizAnswerTable extends Migration {

	public function up()
	{
		Schema::create('student_quiz_answer', function(Blueprint $table) {
			$table->increments('id');
            $table->text('degree');
            $table->text('answer');
            $table->integer('student_quiz_id')->unsigned();
            $table->foreign('student_quiz_id')->references('id')->on('student_quiz')->onDelete('cascade');
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('quiz_questions')->onDelete('cascade');
             $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('student_quiz_answer');
	}
}
