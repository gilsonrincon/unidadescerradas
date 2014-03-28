<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameToReservations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Renombramos el nombre de la tabla de reservaciones que estaba mal escrito
		Schema::rename('reservarions', 'reservations');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Invertimos la corrección en el nombre de la tabla
		Schema::rename('reservations', 'reservarions');
	}

}
