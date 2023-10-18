<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddStatusToInstructorsTable extends Migration {

	public function up()
	{
        Schema::table('instructors', function($table)
        {
            $table->integer('status')->after('image')->default(1);


        });
	}
    public function down()
	{
        Schema::table('instructors', function(Blueprint $table) {
             $table->dropColumn('status');
         });
	}



}
