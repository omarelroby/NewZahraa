<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('payment_methods_translations', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('payment_method_id')->unsigned();
            $table->string('locale')->index();
			$table->string('name', 255);
             $table->unique(['payment_method_id', 'locale']);
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onDelete('cascade');

        });
	}

	public function down()
	{
		Schema::drop('payment_methods_translations');
	}
}
