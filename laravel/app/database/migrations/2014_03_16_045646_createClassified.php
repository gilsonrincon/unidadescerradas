<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassified extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creamos la tabla de clasificados
		Schema::create('classified', function($table){
			//Campo de ID
			$table->increments('id');

			$table->string('title');
			$table->text('shortDescription');
			$table->text('description');
			$table->boolean('premium');
			$table->date('startDate');
			$table->date('endDate');
			$table->integer('numberOfPrints');
			$table->integer('userId');
			$table->integer('clicks');
			
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
		Schema::drop('classified');
	}

}
