<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddIntroductionImageToCoursesTable extends Migration {

	public function up()
	{
        Schema::table('courses', function($table)
        {
            $table->decimal('introduction_image')->nullable();

        });
	}
    public function down()
	{
        Schema::table('courses', function($table) {
             $table->dropColumn(['introduction_image']);
        });
	}



}
