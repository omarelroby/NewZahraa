<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCoverToEmploymentsTable extends Migration {

	public function up()
	{
        Schema::table('employments', function(Blueprint  $table)
        {
            $table->text('cover')->after('image')->nullable();

        });
	}
    public function down()
    {
        Schema::table('employments', function (Blueprint $table) {
            $table->dropColumn('cover');
             });
      }





}
