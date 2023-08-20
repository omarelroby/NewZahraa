<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTypeToOnlineCoursesTable extends Migration {

	public function up()
	{
        Schema::table('online_courses', function($table)
        {
            $table->text('type')->nullable();

        });
	}
    public function down()
	{
        Schema::table('online_courses', function($table) {
             $table->dropColumn(['type']);
        });
	}



}
