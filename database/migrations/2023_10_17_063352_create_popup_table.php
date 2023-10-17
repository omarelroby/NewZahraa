<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePopupTable extends Migration {

	public function up()
	{
		Schema::create('popup', function(Blueprint $table) {
			$table->increments('id');
             $table->string('image', 255);
            $table->string('status', 255)->default('active');
            $table->string('link', 255);
            $table->integer('home_section_id')->nullable()->unsigned();
            $table->foreign('home_section_id')->references('id')->on('home_sections')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('popup');
	}
}
