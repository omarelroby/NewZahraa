<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTransactionIdToBookingAppointmentsTable extends Migration {

	public function up()
	{
        Schema::table('booking_appointments', function($table)
        {
            $table->text('transaction_id')->after('total_price')->nullable();


        });
	}
    public function down()
	{
        Schema::table('booking_appointments', function($table) {
             $table->dropColumn('transaction_id');
         });
	}



}
