<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCategoryToFreeVideosTable extends Migration {

	public function up()
	{
        Schema::table('free_videos', function($table)
        {
            $table->integer('category_id')->nullable();

        });
	}
    public function down()
	{
        Schema::table('free_videos', function($table) {
             $table->dropColumn(['category_id']);
        });
	}



}
