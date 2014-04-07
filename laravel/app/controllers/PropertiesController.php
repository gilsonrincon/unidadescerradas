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
	}

	//Editamos
	public function edit($id)
	{
		//Recuperamos la propiedad
		$property = Property::find($id);
		$owners = Owner::all();
		$residents = Resident::all();

		//Error 404 si la propiedad no existe
		if(is_null ($property))
			App::abort(404, 'El propietario no existe.');

		return View::make('properties.edit', array('property'=>$property, 'owners'=>$owners, 'residents'=>$residents));
	}

	//Actualizamos los datos de la propiedad
	public function update($id)
	{
		$property = Property::find($id);
		
		//Error 404 si la propiedad no existe
		if(is_null ($property))
			App::abort(404, 'El propietario no existe.');

		//Le asignamos los valores
		$property->reference = Input::get('reference');
		$property->ownerId = Input::get('owner');
		$property->residentId = Input::get('resident');


		//Guardar y redireccionar, en caso de que no guarde enviara un mensaje de error
		if($property->save()):
			return Redirect::to('propiedades')->with('success', 'Se han guardado los cambios correctamente.');
		else:
			return Redirect::back()->with('error', 'No se pudo guardar os cambios');
		endif;
	}

	//Borrar la propiedad
	public function destroy($id)
	{
		//Borramos la propiedad, si se completa regresara indicando que se borro, sino indicando que no se borro
		if(Property::destroy($id)):
			return Redirect::back()->with('success', 'Se ha borrado la propiedad.');
		else:
			return Redirect::back()->with('error', 'No se pudo borrar la propiedad.');
		endif;
	}

}