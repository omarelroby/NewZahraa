<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageTable extends Migration {

	public function up()
	{
		Schema::create('pages', function(Blueprint $table) {
			$table->increments('id');
            $table->string('image', 255)->nullable();
            $table->string('video_url', 255)->nullable();
            $table->string('upload_video', 255)->nullable();
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('pages');
	}
}
