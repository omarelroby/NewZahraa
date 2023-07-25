<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('category_translations', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->string('locale')->index();
			$table->string('name', 255);
            $table->unique(['category_id', 'locale']);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

        });
	}

	public function down()
	{
		Schema::drop('category_translations');
	}
}
