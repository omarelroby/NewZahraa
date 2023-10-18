<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddInstructorCommisionToOnlineCoursesOrderTable extends Migration {

	public function up()
	{
        Schema::table('online_course_orders', function($table)
        {
            $table->text('instructor_commision')->after('transaction_id')->nullable();


        });
	}
    public function down()
	{
        Schema::table('online_course_orders', function($table) {
             $table->dropColumn('instructor_commision');
         });
	}



}
