<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCodeToCustomerTable extends Migration {

	public function up()
	{
        Schema::table('customers', function($table)
        {
            $table->text('code')->after('image')->nullable();

        });
	}
    public function down()
	{
        Schema::table('customers', function($table) {
             $table->dropColumn('code');
        });
	}



}
