<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmploymentTable extends Migration {

	public function up()
	{
		Schema::create('employments', function(Blueprint $table) {
			$table->increments('id');
             $table->string('salary', 255);
            $table->string('image', 255);
            $table->string('experience', 255);
            $table->string('Gender', 255);
            $table->string('job_type', 255);
            $table->date('expiration_date');
            $table->date('posted_date');
             $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('employments');
	}
}
