<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHomeSectionsTable extends Migration {

	public function up()
	{
		Schema::create('home_sections', function(Blueprint $table) {
			$table->increments('id');
            $table->text('slug')->nullable();
            $table->string('url', 255);
            $table->string('image', 255)->nullable();
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('home_sections');
	}
}
