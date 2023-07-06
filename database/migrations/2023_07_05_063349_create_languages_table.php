<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration {

	public function up()
	{
		Schema::create('languages', function(Blueprint $table) {
			$table->increments('id');
            $table->string('name', 255);
            $table->string('locale', 255);
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('languages');
	}
}
