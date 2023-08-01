<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountryTable extends Migration {

	public function up()
	{
		Schema::create('countries', function(Blueprint $table) {
			$table->increments('id');
            $table->string('image', 255);
            $table->text('slug')->nullable();
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('countries');
	}
}
