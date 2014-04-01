<?php

class FrontController extends BaseController {
	//Mostramos el inicio
	public function showWelcome()
	{
		//Obtenemos los clasificados premium
		$classifiedPremium = Classified::where('premium', '=', true)->where('endDate', '>=', date('Y-m-d'))->take(3)->get();
		
		//Obtenemos los clasificados no premium
		$classifiedNoPremium = Classified::where('premium', '=', false)->where('endDate', '>=', date('Y-m-d'))->take(5)->get();

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

	//Mostramos contacto
	public function showContact()
	{
		return View::make('contacto');
	}

	//Mostramos todos los clasificados
	public function showAllClassified()
	{
		/*Inicia el algoritmo para convertir la fecha para ser usada en la base de datos*/
		//$date = date('Y');
		
		/*Obtenemos el mes real*/
		/*$m = date('m');
		if($m < 10):
			$m = explode('0', $m);
			$date .= '-'.$m[1];
		else:
			$date .= '-'.$m;
		endif;*/

		/*Obtenemos el dia real*/
		/*$d = date('d');
		if($d < 10):
			$d = explode('0', $d);
			$date .= '-'.$d[1];
		else:
			$date .= '-'.$d;
		endif;*/

		//echo $date;
		/*Fin del algoritmo de la fecha*/

		//Obtenemos los clasificados premium
		$classifiedPremium = Classified::where('premium', '=', true)->where('endDate', '>=', date('Y-m-d'))->get();
		//Obtenemos los clasificados no premium
		$classifiedNoPremium = Classified::where('premium', '=', false)->where('endDate', '>=', date('Y-m-d'))->get();

		return View::make('todosLosClasificados', array('classifiedPremium' => $classifiedPremium, 'classifiedNoPremium' => $classifiedNoPremium));
	}

	//Un solo clasificado 
	public function showCLassified($id)
	{
		//Obtenemos el clasificado
		$classified = Classified::find($id);

		//Retornamos la vista
		return View::make('clasificado', array('classified' => $classified));
	}

	//Mostramos todos los de la cartelera
	public function showAllBulletins()
	{	
		//Obtenemos todos los boletines y los pasamos a la vista.
		$bulletins = BulletinBoard::all();
		return View::make('todosLosDeCartelera', array('bulletins' => $bulletins));
	}

	//Un solo boletin o de la cartelera
	public function showBulletin($id)
	{
		//Obtenemos el clasificado
		$bulletin = BulletinBoard::find($id);

		//Retornamos la vista
		return View::make('cartelera', array('bulletin' => $bulletin));
	}

	//Ruta que muestra la información de la unidad
	public function showInformation()
	{
		return View::make('informacionUnidad');
	}
}