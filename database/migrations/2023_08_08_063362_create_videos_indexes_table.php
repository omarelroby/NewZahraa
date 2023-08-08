<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideosIndexesTable extends Migration {

	public function up()
	{
		Schema::create('videos_indexes', function(Blueprint $table) {
			$table->increments('id');
            $table->text('time_from')->nullable();
            $table->text('time_to')->nullable();
            $table->integer('videos_id')->unsigned();
            $table->foreign('videos_id')->references('id')->on('videos')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('videos_indexes');
	}
}
