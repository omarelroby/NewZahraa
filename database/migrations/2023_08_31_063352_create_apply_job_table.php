<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplyJobTable extends Migration {

	public function up()
	{
		Schema::create('apply_job', function(Blueprint $table) {
			$table->increments('id');
             $table->string('name', 255);
            $table->string('phone', 255);
            $table->string('email', 255);
            $table->integer('job_id');
            $table->text('cv');
             $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('apply_job');
	}
}
