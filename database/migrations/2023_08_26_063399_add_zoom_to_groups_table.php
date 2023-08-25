<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddZoomToGroupsTable extends Migration {

	public function up()
	{
        Schema::table('groups', function($table)
        {
            $table->text('meeting_id')->after('instructor_id')->nullable();
            $table->text('start_url')->after('instructor_id')->nullable();

        });
	}
    public function down()
	{
        Schema::table('groups', function($table) {
             $table->dropColumn(['meeting_id','start_url']);
        });
	}



}
