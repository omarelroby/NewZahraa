<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplateTable extends Migration {

	public function up()
	{
		Schema::create('template', function(Blueprint $table) {
			$table->increments('id');
             $table->text('subject');
            $table->longText('body');
             $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('template');
	}
}
