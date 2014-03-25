<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesBulletinBoard extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creamos la tabla de las imagenes para la tabla de la cartelera informativa
		Schema::create('imagesBulletinBoard', function($table){
			//Campo de ID
			$table->increments('id');

			$table->string('image');
			$table->integer('bulletinId');
			
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
		Schema::drop('imagesBulletinBoard');
	}

}
