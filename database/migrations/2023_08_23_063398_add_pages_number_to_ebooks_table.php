<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddPagesNumberToEbooksTable extends Migration {

	public function up()
	{
        Schema::table('ebooks', function($table)
        {
            $table->decimal('pages_number')->nullable();

        });
	}
    public function down()
	{
        Schema::table('ebooks', function($table) {
             $table->dropColumn(['pages_number']);
        });
	}



}
