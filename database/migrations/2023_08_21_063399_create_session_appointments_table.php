<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSessionAppointmentsTable extends Migration {

	public function up()
	{
		Schema::create('session_appointments', function(Blueprint $table) {
			$table->increments('id');
            $table->text('month');
            $table->dateTime('date');
             $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('session_appointments');
	}
}
