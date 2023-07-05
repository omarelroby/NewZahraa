<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminsTable extends Migration {

	public function up()
	{
		Schema::create('admins', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->text('email');
			$table->text('password');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('admins');
	}
}
