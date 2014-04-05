<?php

class ReservationsController extends \BaseController {

	/*
	 Mostramos el formulario para hacer una reservación
	 */
	public function index()
	{
		//recuperamos todos los servicios
		$services = Service::all();
		//Renderizamos la vista, pasamos la lista de servicios
		return View::make('reservacionDeServicios', array('services' => $services));
	}

	
	public function create()
	{

	}

	public function store()
	{
		//Creamos una nueva reservación
		$reservation = new Reservation();
		$reservation->serviceId = Input::get('type');

		//Usuario temporal de la reservación, se debe cambiar por el loggueado
		$reservation->userId = 1;
		
		//Colocamos la fecha actual en que se reservo, la fecha para la que se reservo, descripcion
		//y telefono.
		$reservation->reserveWas = date('Y-m-d');
		$reservation->reservationDate = Input::get('date');
		$reservation->description = Input::get('descripcion');
		$reservation->tel = Input::get('tel');

		//Guardamos la resercación, si no es posible indicara que ocurrio un error
		if($reservation->save()):
			return Redirect::to('reservaciondeservicios')->with('success', 'Su reservación fue hecha de forma exitosa.');
		else:
			return Redirect::to('reservaciondeservicios')->with('error', 'Ocurrio un error inesperado. Por favor vuelva a intentarlo')->withInput();
		endif;
	}

	public function show($id)
	{
	}

	public function edit($id)
	{
	}

	public function update($id)
	{
	}

	public function destroy($id)
	{
		
	}

}