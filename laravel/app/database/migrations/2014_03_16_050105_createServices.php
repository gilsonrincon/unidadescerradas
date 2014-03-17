<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServices extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creamos la tabla de servicios
		Schema::create('services', function($table){
			//Campo de ID
			$table->increments('id');

			$table->string('name');
			$table->double('value');
			$table->text('description');
			$table->text('status');
			
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
		Schema::drop('services');
	}

}
