<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTypeToCategoryTable extends Migration {

	public function up()
	{
        Schema::table('categories', function($table)
        {
            $table->text('type')->nullable();

        });
	}
    public function down()
	{
        Schema::table('categories', function($table) {
             $table->dropColumn(['type']);
        });
	}



}
