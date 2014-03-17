<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocuments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creamos la tabla de los documentos
		Schema::create('documents', function($table){
			//Campo de ID
			$table->increments('id');

			$table->integer('folderId');
			$table->string('title');
			$table->text('fileName');
			$table->boolean('type');
			$table->date('publication');
			
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
