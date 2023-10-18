<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddReadToWithdrawRequestTable extends Migration {

	public function up()
	{
        Schema::table('withdraw_request', function(Blueprint  $table)
        {
            $table->integer('read')->after('status')->default(0);

        });
	}
    public function down()
    {
        Schema::table('withdraw_request', function (Blueprint $table) {
            $table->dropColumn('read');
             });
    }





}
