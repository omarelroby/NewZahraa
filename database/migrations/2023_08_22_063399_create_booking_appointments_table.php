<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookingAppointmentsTable extends Migration {

	public function up()
	{
		Schema::create('booking_appointments', function(Blueprint $table) {
			$table->increments('id');
            $table->text('name');
            $table->text('phone');
            $table->text('email');
            $table->text('payment_method')->nullable();
            $table->text('session_price');
            $table->text('total_price');
            $table->text('zoom_link')->nullable();
            $table->tinyInteger('discount')->default(0);
             $table->integer('appointment_id')->unsigned();
            $table->foreign('appointment_id')->references('id')->on('session_appointments')->onDelete('cascade');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->integer('coupon_id')->unsigned()->nullable();
            $table->foreign('coupon_id')->references('id')->on('coupon_code')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('booking_appointments');
	}
}
