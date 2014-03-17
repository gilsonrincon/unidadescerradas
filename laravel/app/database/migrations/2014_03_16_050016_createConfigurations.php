<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigurations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creamos la tabla de la cartelera informativa
		Schema::create('configurations', function($table){
			//Campo de ID
			$table->increments('id');

			$table->string('configuration');
			$table->string('short');
			$table->text('long');
			
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
		Schema::drop('configurations');
	}

}
