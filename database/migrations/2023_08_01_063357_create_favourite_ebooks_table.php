<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFavouriteEbooksTable extends Migration {

	public function up()
	{
		Schema::create('favourite_ebooks', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
			$table->integer('ebooks_id')->unsigned();
            $table->foreign('ebooks_id')->references('id')->on('ebooks')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('favourite_ebooks');
	}
}
