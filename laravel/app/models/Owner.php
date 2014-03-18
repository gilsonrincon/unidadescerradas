<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Owner extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'owners';

	//Relación del propietario como residente
	function resident(){
		return $this->hasOne('Resident', 'ownerId');
	}

	//Relación de que el propietario puede tener muchas propiedades
	function properties(){
		return $this->hasMany('Property', 'ownerId');
	}

	//Relación de que el propietario puede ser un usuario
	function user(){
		return $this->hasOne('User', 'ownerId');
	}

}