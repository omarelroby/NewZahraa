<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOnlineCourseOrdersTable extends Migration {

	public function up()
	{
		Schema::create('online_course_orders', function(Blueprint $table) {
			$table->increments('id');
            $table->text('payment_method')->nullable();
            $table->tinyInteger('discount')->default(0);
            $table->decimal('price');
            $table->string('status')->default("pending");
            $table->decimal('total')->nullable();
            $table->integer('instructor_id')->unsigned();
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('cascade');
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->integer('online_course_id')->unsigned();
            $table->foreign('online_course_id')->references('id')->on('online_courses')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('online_course_orders');
	}
}
