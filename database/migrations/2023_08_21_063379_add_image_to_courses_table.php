<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddImageToCoursesTable extends Migration {

	public function up()
	{
        Schema::table('courses', function($table)
        {
            $table->text('image')->nullable();

        });
	}
    public function down()
	{
        Schema::table('courses', function($table) {
             $table->dropColumn(['image']);
        });
	}



}
