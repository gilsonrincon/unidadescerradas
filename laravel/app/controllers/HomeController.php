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
		return View::make('home', array('classifiedNoPremium'=>$classifiedNoPremium, 'classifiedPremium'=>$classifiedPremium, 'bulletins'=>$bulletins));
	}
}