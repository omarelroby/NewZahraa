<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCodeToCountriesTable extends Migration {

	public function up()
	{
        Schema::table('countries', function($table)
        {
            $table->text('country_code')->nullable();

        });
	}
    public function down()
	{
        Schema::table('countries', function($table) {
             $table->dropColumn(['country_code']);
        });
	}



}
