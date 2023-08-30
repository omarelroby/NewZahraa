<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignUsersIdFromStudentQuizTable extends Migration {

	public function up()
	{
        Schema::table('student_quiz', function (Blueprint $table) {
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('customers');        });
	}

	public function down()
	{
		Schema::drop('users_id');
	}
}
