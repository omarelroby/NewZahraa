<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWithdrawRequestTable extends Migration {

	public function up()
	{
		Schema::create('withdraw_request', function(Blueprint $table) {
			$table->increments('id');
            $table->string('cash', 255);
            $table->string('instructor_id', 255);
            $table->string('status', 255)->default('pending');
            $table->date('approved_date')->nullable();
             $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('withdraw_request');
	}
}
