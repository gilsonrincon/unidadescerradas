<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClickClassified extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creamos la tabla de clicks de los clasificados
		Schema::create('clickClassified', function($table){
			//Campo de ID
			$table->increments('id');

			$table->integer('classifiedId');
			$table->string('ip');
			$table->date('description');
			$table->integer('userId');
			
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
		Schema::drop('clickClassified');
	}

}
