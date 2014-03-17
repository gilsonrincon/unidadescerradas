<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBulletinBoard extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creamos la tabla de la cartelera informativa
		Schema::create('bulletinBoard', function($table){
			//Campo de ID
			$table->increments('id');

			$table->string('title');
			$table->text('shortDescription');
			$table->text('description');
			$table->boolean('premium');
			$table->date('startDate');
			$table->date('endDate');
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
		Schema::drop('bulletinBoard');
	}

}
