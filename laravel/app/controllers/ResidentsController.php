<?php

class ResidentsController extends \BaseController {

	//Lista de residentes
	public function index()
	{
		//Obtenemos la lista de residentes y la pasamos a la vista
		$residents = Resident::all();
		return View::make('residents.index', array('residents'=>$residents));
	}

	
	public function create()
	{
		//Obtenemos la lista de propietarios y la pasamos
		$owners = Owner::all();
		return View::make('residents.new', array('owners'=>$owners));
	}

	
	public function store()
	{
		//Creamos al nuevo residente
		$resident = new Resident();

		//Llenamos los datos del propietarios
		$resident->name = Input::get('name');
		$resident->lastname = Input::get('lastname');
		$resident->document = Input::get('document');
		$resident->email = Input::get('email');
		$resident->tel = Input::get('tel');
		$resident->mobile = Input::get('mobile');
		$resident->ownerId = Input::get('owner');

		//Guardamos y redireccionamos dependiendo de si se pudo o no guardar.
		if($resident->save()):
			return Redirect::to('propietarios')->with('success', 'Se ha guardado el propietario.');
		else:
			return Redirect::to('propietarios')->with('error', 'No se pudo guardar el propietario');
		endif;
	}

	
	public function show($id)
	{
		//
	}

	
	public function edit($id)
	{
		//
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