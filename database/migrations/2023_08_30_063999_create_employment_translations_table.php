<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmploymentTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('employment_translations', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('employment_id')->unsigned();
            $table->string('locale')->index();
			$table->string('title', 255);
			$table->text('description');
			$table->text('qualifications');
            $table->unique(['employment_id', 'locale']);
            $table->foreign('employment_id')->references('id')->on('employments')->onDelete('cascade');

        });
	}

	public function down()
	{
		Schema::drop('employment_translations');
	}
}
