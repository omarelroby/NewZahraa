<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentTable extends Migration {

	public function up()
	{
		Schema::create('payment_methods', function(Blueprint $table) {
			$table->increments('id');
             $table->string('image', 255);
             $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('payment_methods');
	}
}
