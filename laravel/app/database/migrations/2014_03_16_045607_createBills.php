<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBills extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creamos la tabla de facturas
		Schema::create('bills', function($table){
			//Campo de ID
			$table->increments('id');

			$table->integer('propertyId');
			$table->double('value');
			$table->date('paymentDate');
			
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
		Schema::drop('bills');
	}
}
