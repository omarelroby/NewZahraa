<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RemoveDateFromAppointmentsTable extends Migration {

	public function up()
	{
        Schema::table('group_appointments', function($table) {
             $table->dropColumn(['appointment_date']);
        });
	}
    public function down()
	{
        Schema::table('group_appointments', function($table) {
             $table->dropColumn(['appointment_date']);
        });
	}



}
