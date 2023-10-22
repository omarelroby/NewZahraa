<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddReadToApplyJobsTable extends Migration {

	public function up()
	{
        Schema::table('apply_job', function(Blueprint  $table)
        {
            $table->integer('read')->after('cv')->default(0);

        });
	}
    public function down()
    {
        Schema::table('apply_job', function (Blueprint $table) {
            $table->dropColumn('read');
             });
    }





}
