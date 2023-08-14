<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCategoryToCoursesTable extends Migration {

	public function up()
	{
        Schema::table('courses', function($table)
        {
            $table->integer('category_id')->nullable();

        });
	}
    public function down()
	{
        Schema::table('courses', function($table) {
             $table->dropColumn(['category_id']);
        });
	}



}
