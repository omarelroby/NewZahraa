<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class DeleteForeignUsersIdFromStudentQuizTable extends Migration {

	public function up()
	{
        Schema::table('student_quiz', function (Blueprint $table) {
             $table->dropColumn(['users_id']);
        });
	}


}
