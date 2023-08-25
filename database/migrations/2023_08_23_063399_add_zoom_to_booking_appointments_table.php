<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddZoomToBookingAppointmentsTable extends Migration {

	public function up()
	{
        Schema::table('booking_appointments', function($table)
        {
            $table->text('meeting_id')->after('coupon_id')->nullable();
            $table->text('start_url')->after('coupon_id')->nullable();

        });
	}
    public function down()
	{
        Schema::table('booking_appointments', function($table) {
             $table->dropColumn(['meeting_id','start_url']);
        });
	}



}
