<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiLecturerTable extends Migration {

	public function up()
	{
		Schema::create('instructor_requests', function(Blueprint $table) {
			$table->increments('id');
            $table->text('slug')->nullable();
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('phone', 255);
            $table->string('cv', 255);
            $table->integer('status')->default(0);
            $table->integer('country_id')->unsigned();
            $table->integer('category_id')->unsigned();
             $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('instructor_requests');
	}
}
