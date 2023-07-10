<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('setting_translations', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('setting_id')->unsigned();
            $table->string('locale')->index();
			$table->string('title', 255);
			$table->text('description')->nullable();
            $table->unique(['setting_id', 'locale']);
            $table->foreign('setting_id')->references('id')->on('settings')->onDelete('cascade');

        });
	}

	public function down()
	{
		Schema::drop('setting_translations');
	}
}
