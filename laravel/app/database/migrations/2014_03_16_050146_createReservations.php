<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creamos la tabla de las reservas
		Schema::create('reservarions', function($table){
			//Campo de ID
			$table->increments('id');

			$table->integer('serviceId');
			$table->integer('userId');
			$table->date('reserveWas');
			$table->date('reservationDate');
			
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
		Schema::drop('reservarions');
	}

}
