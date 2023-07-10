<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEbookTable extends Migration {

	public function up()
	{
		Schema::create('ebooks', function(Blueprint $table) {
			$table->increments('id');
            $table->string('image', 255);
            $table->string('sample_file', 255)->nullable();
            $table->string('complete_file', 255)->nullable();
            $table->string('writer', 255)->nullable();
            $table->string('type', 255);
            $table->string('amazon_url', 255)->nullable();
            $table->string('price', 255);
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('ebooks');
	}
}
