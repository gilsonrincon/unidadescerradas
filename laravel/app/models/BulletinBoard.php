<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class BulletinBoard extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'bulletinBoard';

	//Relación de que pertenece a un usuario
	public function user()
	{
		return $this->belongsTo('User', 'userId');
	}

	//Relación de que tiene una imagen
	public function image()
	{
		return $this->hasOne('ImageBulletinBoard', 'bulletinId');
	}
}