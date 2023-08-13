<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuizQuestionsTable extends Migration {

	public function up()
	{
		Schema::create('quiz_questions', function(Blueprint $table) {
			$table->increments('id');
			$table->text('name');
			$table->tinyInteger('is_discount')->default(0);
			$table->text('type');
			$table->decimal('discount')->nullable();
			$table->decimal('discount_score')->nullable();
			$table->decimal('pass_score')->nullable();
			$table->decimal('degree');
			$table->text('correct_answer');
            $table->integer('quiz_id')->unsigned();
            $table->foreign('quiz_id')->references('id')->on('quiz')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('quiz_questions');
	}
}
