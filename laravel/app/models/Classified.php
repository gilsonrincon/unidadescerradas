<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Classified extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'classified';

	//Relación de que pertenece a un usuario
	public function user()
	{
		return $this->belongsTo('User', 'userId');
	}

	//Relación que tiene con muchos clicks
	public function clicks()
	{
		return $this->hasMany('ClickClassified', 'classifiedId');
	}
}