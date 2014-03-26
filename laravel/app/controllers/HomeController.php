<?php

class HomeController extends BaseController {

	public function showWelcome()
	{
		//Obtenemos los clasificados premium
		$classifiedPremium = Classified::where('premium', '=', true)->take(3)->get();
		
		//Obtenemos los clasificados no premium
		$classifiedNoPremium = Classified::where('premium', '=', false)->take(5)->get();

		//Obtenemos elementos de la tabla de boletines
		$bulletins = bulletinBoard::where('startDate', '>=', date('Y-m-d'))->orderBy('id', 'DESC')->take(4)->get();
		
		//Renderizamos la vista pasando los clasificados
		return View::make('home', array('classifiedNoPremium' => $classifiedNoPremium, 'classifiedPremium' => $classifiedPremium, 'bulletins' => $bulletins));
	}

	public function showRegister()
	{
		//Obtenemos la lista de dueños existente
		$owners = Owner::all();

		//Obtenemos la lista de propiedades
		$properties = Property::all();

		//Renderizamos la vista, pasamos la lista de dueños
		return View::make('registrarse', array('owners' => $owners, 'properties' => $properties));
	}

	public function showLogin()
	{
		//Renderizamos la vista
		return View::make('ingresar');
	}
}