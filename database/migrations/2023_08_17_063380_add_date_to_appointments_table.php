<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddDateToAppointmentsTable extends Migration {

	public function up()
	{
        Schema::table('group_appointments', function($table) {
             $table->dateTime('appointment_date')->nullable();
        });
	}
    public function down()
	{
        Schema::table('group_appointments', function($table) {
             $table->dropColumn('appointment_date');
        });
	}



}
