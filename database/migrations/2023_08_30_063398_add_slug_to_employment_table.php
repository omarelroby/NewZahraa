<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddSlugToEmploymentTable extends Migration {

	public function up()
	{
        Schema::table('employments', function($table)
        {
            $table->text('slug')->nullable();

        });
	}
    public function down()
	{
        Schema::table('employments', function($table) {
             $table->dropColumn('slug');
        });
	}



}
