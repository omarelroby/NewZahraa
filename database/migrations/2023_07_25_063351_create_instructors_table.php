<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstructorsTable extends Migration {

	public function up()
	{
		Schema::create('instructors', function(Blueprint $table) {
			$table->increments('id');
            $table->string('name', 255);
            $table->string('phone', 255);
            $table->string('email', 255);
            $table->text('password');
            $table->text('brief');
            $table->text('image');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
             $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('instructors');
	}
}
