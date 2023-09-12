<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTransactionIdToCoursesOrderTable extends Migration {

	public function up()
	{
        Schema::table('courses_orders', function($table)
        {
            $table->text('transaction_id')->after('total')->nullable();


        });
	}
    public function down()
	{
        Schema::table('courses_orders', function($table) {
             $table->text('transaction_id')->after('total')->nullable();
         });
	}



}
