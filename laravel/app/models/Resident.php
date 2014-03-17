<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Resident extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'residents';


	//relacion de que puede ser un propietario
	function owner()
	{
		return $this->belongsTo('Owner', 'ownerId');
	}

	//relación con la residencia
	function property()
	{
		return $this->hasOne('Property', 'residentId');
	}

	//Relación de que pertenece a un usuario
	public function user()
	{
		return $this->belongsTo('User', 'redidentId');
	}

}