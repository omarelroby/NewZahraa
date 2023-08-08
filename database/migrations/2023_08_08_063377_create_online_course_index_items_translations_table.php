<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOnlineCourseIndexItemsTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('online_course_index_items_translations', function(Blueprint $table) {
			$table->increments('id');
            $table->text('title')->nullable();
            $table->string('locale')->index();
            $table->integer('online_course_indexes_items_id')->unsigned();
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('online_course_index_items_translations');
	}
}
