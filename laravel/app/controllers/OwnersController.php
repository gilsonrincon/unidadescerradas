<?php

class OwnersController extends \BaseController {

	//Lista de propietarios
	public function index()
	{
		$owners = Owner::all();
		return View::make('owners.index', array('owners'=>$owners));
	}

	//
	public function create()
	{
		return View::make('owners.new');
	}


	public function store()
	{
		//Creamos al nuevo propietario
		$owner = new Owner();

		//Llenamos los datos del propietarios
		$owner->name = Input::get('name');
		$owner->lastname = Input::get('lastname');
		$owner->document = Input::get('document');
		$owner->email = Input::get('email');
		$owner->tel = Input::get('tel');
		$owner->mobile = Input::get('mobile');

		//Guardamos y redireccionamos dependiendo de si se pudo o no guardar.
		if($owner->save()):
			return Redirect::to('propietarios')->with('success', 'Se ha guardado el propietario.');
		else:
			return Redirect::to('propietarios')->with('error', 'No se pudo guardar el propietario');
		endif;

	}

	public function show($id)
	{
		//
	}

	//Editar el propietario
	public function edit($id)
	{
		$owner = Owner::find($id);
		return View::make('owners.edit', array('owner'=>$owner));
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}

}