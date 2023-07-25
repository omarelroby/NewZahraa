<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstructorAttachsTable extends Migration {

	public function up()
	{
		Schema::create('instructor_attachs', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('instructor_id')->unsigned();
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('cascade');
            $table->text('file');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('instructor_attachs');
	}
}
