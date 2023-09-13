<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddbalanceToInstructorsTable extends Migration {

	public function up()
	{
        Schema::table('instructors', function($table)
        {
            $table->text('balance')->after('code')->nullable();


        });
	}
    public function down()
	{
        Schema::table('instructors', function($table) {
             $table->text('balance')->after('code')->nullable();
         });
	}



}
