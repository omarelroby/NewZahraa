<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddStatusToBookingAppointmentsTable extends Migration {

	public function up()
	{
        Schema::table('booking_appointments', function($table)
        {
            $table->text('status')->after('transaction_id')->nullable()->default('pending');


        });
	}
    public function down()
	{
        Schema::table('booking_appointments', function($table) {
             $table->text('status')->after('transaction_id')->nullable()->default('pending');
         });
	}



}
