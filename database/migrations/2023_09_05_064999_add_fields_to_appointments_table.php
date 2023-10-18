<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddFieldsToAppointmentsTable extends Migration {

	public function up()
	{
        Schema::table('group_appointments', function($table)
        {
            $table->text('join_link')->after('appointment_date')->nullable();
            $table->text('start_url')->after('appointment_date')->nullable();
            $table->text('meeting_id')->after('appointment_date')->nullable();

        });
	}
    public function down()
	{
        Schema::table('group_appointments', function($table) {
             $table->dropColumn('join_link');
             $table->dropColumn('start_url');
             $table->dropColumn('meeting_id');
        });
	}



}
