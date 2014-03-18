<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class ClickClassified extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'clickClassified';

	//Relación de que pertenece a un classificado
	public function classified()
	{
		return $this->belongsTo('Classified', 'classifiedId');
	}

}