<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creamos la tabla de usuarios
		Schema::create('users', function($table){
			//Campo de ID
			$table->increments('id');

			$table->string('username');
			$table->integer('password');
			$table->boolean('userType');
			$table->integer('residentId');
			$table->integer('ownerId');

			//Campos de tiempo
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Borramos la tabla
		Schema::drop('users');
	}

}
