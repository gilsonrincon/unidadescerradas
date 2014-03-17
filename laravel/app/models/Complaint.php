<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Complaint extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'complaints';

	//Relación de que pertenece a un usuario
	public function user()
	{
		return $this->belongsTo('User', 'userId');
	}

}