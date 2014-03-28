<?php

class HomeController extends BaseController {
	//Mostramos el inicio
	public function showWelcome()
	{
		//Obtenemos los clasificados premium
		$classifiedPremium = Classified::where('premium', '=', true)->take(3)->get();
		
		//Obtenemos los clasificados no premium
		$classifiedNoPremium = Classified::where('premium', '=', false)->take(5)->get();

		//Obtenemos elementos de la tabla de boletines
		$bulletins = BulletinBoard::where('startDate', '>=', date('Y-m-d'))->orderBy('id', 'DESC')->take(4)->get();
		
		//Renderizamos la vista pasando los clasificados
		return View::make('home', array('classifiedNoPremium' => $classifiedNoPremium, 'classifiedPremium' => $classifiedPremium, 'bulletins' => $bulletins));
	}

	//Mostramos registrarse
	public function showRegister()
	{
		//Obtenemos la lista de dueños existente
		$owners = Owner::all();

		//Obtenemos la lista de propiedades
		$properties = Property::all();

		//Renderizamos la vista, pasamos la lista de dueños
		return View::make('registrarse', array('owners' => $owners, 'properties' => $properties));
	}

	//Mostramos las reservaciones
	public function showReservations()
	{
		//recuperamot todos los resvicios
		$services = Service::all();
		//Renderizamos la vista, pasamos la lista de servicios
		return View::make('reservacionDeServicios', array('services' => $services));
	}

	//Mostramos contacto
	public function showContact()
	{
		return View::make('contacto');
	}

	//Mostramos todos los clasificados
	public function showAllClassified()
	{
		//Obtenemos los clasificados premium
		$classifiedPremium = Classified::where('premium', '=', true)->take(6)->get();
		
		//Obtenemos los clasificados no premium
		$classifiedNoPremium = Classified::where('premium', '=', false)->take(10)->get();

		return View::make('todosLosClasificados', array('classifiedPremium' => $classifiedPremium, 'classifiedNoPremium' => $classifiedNoPremium));
	}

	//Mostramos todos los de la cartelera
	public function showAllBulletins()
	{	
		//Obtenemos todos los boletines y los pasamos a la vista.
		$bulletins = BulletinBoard::all();
		return View::make('todosLosDeCartelera', array('bulletins' => $bulletins));
	}
}