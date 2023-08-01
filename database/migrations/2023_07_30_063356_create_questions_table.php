<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionsTable extends Migration {

	public function up()
	{
		Schema::create('questions', function(Blueprint $table) {
			$table->increments('id');
            $table->text('slug')->nullable();
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('questions');
	}
}
