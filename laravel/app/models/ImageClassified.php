<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class ImageClassified extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'imagesClassified';

	//Relación de que pertenece a los clasificados
	public function classified()
	{
		return $this->belongsTo('Classified', 'classifiedId');
	}
}