<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionOptionsTable extends Migration {

	public function up()
	{
		Schema::create('question_options', function(Blueprint $table) {
			$table->increments('id');
			$table->text('answer');
			$table->text('answer_number');
             $table->integer('quiz_question_id')->unsigned();
            $table->foreign('quiz_question_id')->references('id')->on('quiz_questions')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('question_options');
	}
}
