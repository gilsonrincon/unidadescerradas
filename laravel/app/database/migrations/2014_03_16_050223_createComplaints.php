<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaints extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creamos la tabla de quejas
		Schema::create('complaints', function($table){
			//Campo de ID
			$table->increments('id');

			$table->string('title');
			$table->integer('userId');
			$table->date('complaintDate');
			$table->text('description');
			
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
		Schema::drop('complaints');
	}

}
