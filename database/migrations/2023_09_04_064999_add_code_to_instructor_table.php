<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCodeToInstructorTable extends Migration {

	public function up()
	{
        Schema::table('instructors', function($table)
        {
            $table->text('code')->after('image')->nullable();

        });
	}
    public function down()
	{
        Schema::table('instructors', function($table) {
             $table->text('code')->after('image')->nullable();
        });
	}



}
