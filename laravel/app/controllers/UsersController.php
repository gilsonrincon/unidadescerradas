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
		$user->password = Input::get('password');
		$user->userType = Input::get('userType');
		$user->residentId = Input::get('resident');;
		$user->ownerId = Input::get('owner');

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
	public function delete($id)
	{

	}
}
