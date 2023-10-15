<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddImageToFreeVideosTable extends Migration {

	public function up()
	{
        Schema::table('free_videos', function($table)
        {
            $table->text('image')->nullable();

        });
	}
    public function down()
	{
        Schema::table('free_videos', function($table) {
             $table->dropColumn(['image']);
        });
	}



}
