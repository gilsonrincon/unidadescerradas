<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmailToUsers extends Migration {

	//Agregamos el campo de email a users
	public function up()
	{
		Schema::table('users', function($table){
			$table->text('email')->nullable();
		});
	}

	//Quitamos el campo de email de users
	public function down()
	{
		Schema::table('users', function($table){
			$table->dropColumn('email');
		});
	}

}
