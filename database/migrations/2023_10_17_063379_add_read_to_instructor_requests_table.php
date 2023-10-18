<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddReadToInstructorRequestsTable extends Migration {

	public function up()
	{
        Schema::table('instructor_requests', function(Blueprint  $table)
        {
            $table->integer('read')->after('cv')->default(0);

        });
	}
    public function down()
    {
        Schema::table('instructor_requests', function (Blueprint $table) {
            $table->dropColumn('read');
             });
    }





}
