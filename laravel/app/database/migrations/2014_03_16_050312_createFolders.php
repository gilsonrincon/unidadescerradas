<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFolders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creamos la tabla de las carpetas
		Schema::create('folders', function($table){
			//Campo de ID
			$table->increments('id');

			$table->integer('fatherId');
			$table->string('name');
			$table->string('description');
			
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
		Schema::drop('folders');
	}

}
