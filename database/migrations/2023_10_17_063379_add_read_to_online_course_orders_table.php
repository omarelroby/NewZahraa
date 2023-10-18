<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddReadToOnlineCourseOrdersTable extends Migration {

	public function up()
	{
        Schema::table('online_course_orders', function(Blueprint  $table)
        {
            $table->integer('read')->after('total')->default(0);

        });
	}
    public function down()
    {
        Schema::table('online_course_orders', function (Blueprint $table) {
            $table->dropColumn('read');
             });
    }





}
