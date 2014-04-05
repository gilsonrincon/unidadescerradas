<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterReservations extends Migration {

	/*Modificamos la tabla de reservaciones para agregar la descriptión*/
	public function up()
	{	
		Schema::table('reservations', function($table){
			$table->text('description')->nullable();
		});
	}

	/*Quitamos la columna de la descripción*/
	public function down()
	{
		Schema::table('reservations', function($table){
			$table->dropColumn('description');
		});
	}

}
