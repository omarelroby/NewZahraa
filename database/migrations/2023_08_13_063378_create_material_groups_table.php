<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialGroupsTable extends Migration {

	public function up()
	{
		Schema::create('material_groups', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('material_id')->unsigned();
            $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('material_groups');
	}
}
