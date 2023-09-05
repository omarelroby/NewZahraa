<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('question_translations', function(Blueprint $table) {
			$table->increments('id');
			$table->text('question');
            $table->string('locale')->index();
            $table->text('answer');
            $table->integer('questions_id')->unsigned();
            $table->unique(['questions_id','locale']);
            $table->foreign('questions_id')->references('id')->on('questions')->onDelete('cascade');


        });
	}

	public function down()
	{
		Schema::drop('questions_translations');
	}
}
