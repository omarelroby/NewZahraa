<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddStatusToEmploymentTable extends Migration {

	public function up()
	{
        Schema::table('employments', function($table)
        {
            $table->boolean('status')->default(0);

        });
	}
    public function down()
	{
        Schema::table('employments', function($table) {
             $table->boolean('boolean')->default(0);
        });
	}



}
