<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerTable extends Migration {

	public function up()
	{
		Schema::create('customers', function(Blueprint $table) {
			$table->increments('id');
            $table->text('name');
            $table->text('slug')->nullable();
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->text('email');
            $table->text('phone');
            $table->text('image')->nullable();
            $table->text('password');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('customers');
	}
}
