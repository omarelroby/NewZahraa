<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCommisionToInstructorTable extends Migration {

	public function up()
	{
        Schema::table('instructors', function($table)
        {
            $table->decimal('commission_instructor')->nullable();

        });
	}
    public function down()
	{
        Schema::table('instructors', function($table) {
             $table->dropColumn(['commission_instructor']);
        });
	}



}
