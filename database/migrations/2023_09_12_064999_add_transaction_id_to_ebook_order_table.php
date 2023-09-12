<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTransactionIdToEbookOrderTable extends Migration {

	public function up()
	{
        Schema::table('ebook_orders', function($table)
        {
            $table->text('transaction_id')->after('total')->nullable();


        });
	}
    public function down()
	{
        Schema::table('ebook_orders', function($table) {
             $table->text('transaction_id')->after('total')->nullable();
         });
	}



}
