<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEbookOrdersTable extends Migration {

	public function up()
	{
		Schema::create('ebook_orders', function(Blueprint $table) {
			$table->increments('id');
            $table->text('payment_method')->nullable();
            $table->tinyInteger('discount')->default(0);
            $table->decimal('price');
            $table->string('status')->default("pending");
            $table->decimal('total')->nullable();
            $table->integer('ebook_id')->unsigned();
            $table->foreign('ebook_id')->references('id')->on('ebooks')->onDelete('cascade');
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('ebook_orders');
	}
}
