<?php

//Controlador de usuarios, con este controlador, se crea, edita y borra usuarios
class UsersController extends BaseController {

	/*
		Lista de todos los usuarios
	*/
	public function index()
	{
		$users = User::all();
		return View::make('users.index', array('users'=>$users));
	}

	/*
		Formulario para crear un nuevo usuario
	*/

	public function create()
	{
		//Obtenemos los propietarios y residentes y los pasamos a la vista
		$owners = Owner::all();
		$residents = Resident::all();
		return View::make('users.new', array('owners'=>$owners, 'residents'=>$residents));
	}

	/*
		Crear nuevos usuarios
	*/

	public function store()
	{
		//User::create(Input::all());


		//Creamos al nuevo usuario, asignamos los valores y guardamos
		$user = new User();
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->userType = Input::get('userType');
		$user->residentId = Input::get('resident');;
		$user->ownerId = Input::get('owner');
		$user->email = Input::get('email');

		//Guardamos, si guarda redireccionara indicando que todo se completo de forma exitosa,
		//si no logra guardar, redireccionara indicando que ocurrio un error.
		
		if($user->save()):
			return Redirect::to('usuarios')->with('success', 'Se ha creado el usuario de forma exitosa');
		else:
			return Redirect::to('usuarios/create')->withInput()->with('error', 'Ocurrio un error. No se guardo el usuario.');
		endif;
		
	}

	/*
		Editamos los usuarios
	*/
	public function edit($id)
	{

	}

	/*
		Guargamos cuando se edita un usuario
	*/

	public function update($id)
	{

	}	

	/*
		Borramos el usuario
	*/
	public function destroy($id)
	{
		//Obtenemos el usuario, si existe lo borramos indicando que se pudo borrar, sino que no se pudo
		if(User::destroy($id)):
			return Redirect::back()->with('success', 'Se ha borrado el usuario.');
		else:
			return Redirect::back()->with('error', 'No se pudo borrar el usuario.');
		endif;
	}

	/*Recuperamos si el email ya esta en uso*/
	public function emailIsFree()
	{
		$email = Input::get('email');
		$user = User::where('email', '=', $email);
		if(is_null($user)):
			return true;
		else:
			return false;
		endif;
	}
}
