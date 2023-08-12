<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RemoveInstructorFromCoursesTable extends Migration {

	public function up()
	{
        Schema::table('courses', function($table) {
            $table->dropForeign(['instructor_id']);
            $table->dropColumn(['instructor_id']);
        });
	}



}
