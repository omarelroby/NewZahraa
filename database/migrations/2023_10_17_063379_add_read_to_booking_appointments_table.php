<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddReadToBookingAppointmentsTable extends Migration {

	public function up()
	{
        Schema::table('booking_appointments', function(Blueprint  $table)
        {
            $table->integer('read')->after('total_price')->default(0);

        });
	}
    public function down()
    {
        Schema::table('booking_appointments', function (Blueprint $table) {
            $table->dropColumn('read');
             });
    }





}
