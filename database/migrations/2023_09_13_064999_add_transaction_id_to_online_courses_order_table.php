<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTransactionIdToOnlineCoursesOrderTable extends Migration {

	public function up()
	{
        Schema::table('online_course_orders', function($table)
        {
            $table->text('transaction_id')->after('total')->nullable();


        });
	}
    public function down()
	{
        Schema::table('online_course_orders', function($table) {
             $table->dropColumn('transaction_id');
         });
	}



}
