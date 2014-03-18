<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Reservation extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'reservations';

	//Relación de que pertenece a un usuario
	public function user()
	{
		return $this->belongsTo('User', 'userId');
	}

	//Relación de que pertenece a un servicio
	public function service()
	{
		return $this->belongsTo('Service', 'serviceId');
	}
}