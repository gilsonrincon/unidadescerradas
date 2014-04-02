<?php

class PropertiesController extends \BaseController {

	/*Mostramos lista de propiedades*/
	public function index()
	{
		$properties = Property::all();
		return View::make('properties.index', array('properties'=>$properties));
	}

	/*Crear nuevas propiedades*/
	public function create()
	{
		//Lista de propietarios
		$owners = Owner::all();
		$residents = Resident::all();
		return View::make('properties.new', array('owners'=>$owners, 'residents'=>$residents));
	}

	/*Guardamos la propiedad*/
	public function store()
	{
		//Creamos una nueva propiedad
		$property = new Property();

		//Le asignamos los valores
		$property->reference = Input::get('reference');
		$property->ownerId = Input::get('owner');
		$property->residentId = Input::get('resident');


		//Guardar y redireccionar, en caso de que no guarde enviara un mensaje de error
		if($property->save()):
			return Redirect::to('propiedades')->with('success', 'Se ha guardado la propiedad correctamente.');
		else:
			return Redirect::to('propiedades')->withInput()->with('error', 'No se pudo guardar la propiedad');
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