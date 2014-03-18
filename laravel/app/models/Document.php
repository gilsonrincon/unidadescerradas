<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Document extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'documents';

	//Relación de que pertenece a una carpeta
	public function folder()
	{
		return $this->belongsTo('Folder', 'folderId');
	}

}