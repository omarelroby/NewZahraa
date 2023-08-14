<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCategoryEbookTable extends Migration {

	public function up()
	{
        Schema::table('ebooks', function($table)
        {
             $table->integer('category_id')->nullable();

        });
	}
    public function down()
	{
        Schema::table('ebooks', function($table) {
             $table->dropColumn(['category_id']);
        });
	}



}
