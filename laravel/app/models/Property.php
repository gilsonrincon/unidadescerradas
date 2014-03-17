<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Property extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'properties';

	//Relación de que pertenece a un propietario
	public function owner()
	{
		return $this->belongsTo('Owner', 'ownerId');
	}

	//Relación de que pertenece a un inquilino
	public function resident()
	{
		return $this->belongsTo('Resident', 'residentId');
	}

	//Relación de que una propiedad puede tener muchas facturas
	public function bills()
	{
		return $this->hasMany('Bill', 'propertyId');
	}
}