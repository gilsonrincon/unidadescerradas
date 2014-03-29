<?php

class AuthController extends \BaseController {

	/*
	Mostramos el formulario de login
	*/
	public function index()
	{
		//Renderizamos la vista
		return View::make('ingresar');
	}

	/*
	Funcion del login, en caso de que no se realize
	regresara al formulario con un mensaje de error
	*/
	public function store()
	{
		//Obtenemos las credenciales
		$credentials = array('username' => Input::get('email'), 'password' => Input::get('password'));

		//Hacemos login
		if(Auth::attempt($credentials, Input::get('remember'), 0)):
			echo "login";
		else:
			return Redirect::to('ingresar')->with('error', 'Tus datos son incorrectos')->withInput();
		endif;
	}

	/*
	Cerrar sesión con redirrección al formulario de login
	*/
	public function destroy($id)
	{
		Auth::logout();
		Redirect::to("ingresar");
	}

}