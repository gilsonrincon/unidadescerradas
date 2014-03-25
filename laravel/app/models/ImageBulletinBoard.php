<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class ImageBulletinBoard extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'imagesBulletinBoard';

	//Relación de que pertenece a los boletines
	public function bulletingBoard()
	{
		return $this->belongsTo('BulletingBoard', 'bulletinId');
	}
}