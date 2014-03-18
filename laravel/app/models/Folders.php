<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Folder extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'folders';

	//Relación de que tiene muchos documentos
	public function documents()
	{
		return $this->hasMany('Document', 'folderId');
	}

}