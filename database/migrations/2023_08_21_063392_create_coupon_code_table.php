<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCouponCodeTable extends Migration {

	public function up()
	{
		Schema::create('coupon_code', function(Blueprint $table) {
			$table->increments('id');
            $table->text('code');
            $table->integer('number_of_use');
            $table->tinyInteger('used')->default(0);
            $table->decimal('discount');
            $table->text('type');
             $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('coupon_code');
	}
}
