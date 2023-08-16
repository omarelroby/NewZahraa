<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesOrdersTable extends Migration {

	public function up()
	{
		Schema::create('courses_orders', function(Blueprint $table) {
			$table->increments('id');
            $table->text('payment_method')->nullable();
            $table->tinyInteger('discount')->default(0);
            $table->decimal('price');
            $table->string('status')->default("pending");
            $table->decimal('total')->nullable();
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('courses_orders');
	}
}
