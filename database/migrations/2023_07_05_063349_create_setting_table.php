<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
            $table->text('Keywords')->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('whatsapp', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('google_map', 255)->nullable();
            $table->string('facebook_url', 255)->nullable();
            $table->string('twitter_url', 255)->nullable();
            $table->string('youtube_url', 255)->nullable();
            $table->string('tiktok_url', 255)->nullable();
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('settings');
	}
}
