<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppointmentsTable extends Migration {

	public function up()
	{
		Schema::create('group_appointments', function(Blueprint $table) {
			$table->increments('id');
            $table->text('appointment_date')->nullable();
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('group_appointments');
	}
}
