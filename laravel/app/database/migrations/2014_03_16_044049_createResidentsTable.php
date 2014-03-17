<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creamos la tabla de residentes
		Schema::create('residents', function($table){
			//Campo de ID
			$table->increments('id');

			$table->string('name');
			$table->string('lastName');
			$table->string('document');
			$table->string('email');
			$table->integer('tel');
			$table->integer('mobile');
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
		Schema::drop('residents');
	}

}
