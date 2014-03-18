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
		return View::make('users.new');
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
		$user->residentId = Input::get('residentId');;
		$user->ownerId = Input::get('ownerId');
		$user->save();
		return Redirect::to('users');
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
