<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Service extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'services';

	//Relación de que tiene muchas reservaciones
	public function reservations()
	{
		return $this->hasMany('Reservation', 'serviceId');
	}
}