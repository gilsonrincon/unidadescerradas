<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Bill extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'bills';

	//Relación de que pertenece a una propiedad
	public function property()
	{
		return $this->belongsTo('Property', 'propertyId');
	}
}