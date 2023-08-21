<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddSessionPriceToSettingTable extends Migration {

	public function up()
	{
        Schema::table('settings', function($table)
        {
            $table->text('session_price')->nullable();

        });
	}
    public function down()
	{
        Schema::table('settings', function($table) {
             $table->dropColumn(['session_price']);
        });
	}



}
