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

	//Editar el residente
	public function edit($id)
	{	
		//Recuperamos el residente, si no existe marcamos un error 404
		$resident = Resident::find($id);

		//Recuperamos la lista de propietarios
		$owners = Owner::all();

		if(is_null ($resident))
			App::abort(404, 'El residente no existe.');

		return View::make('residents.edit', array('resident'=>$resident, 'owners'=>$owners));
	}

	//Actualizamos los residentes
	public function update($id)
	{
		//Recuperamos el residente
		$resident = Resident::find($id);

		//Si el residente no se encuentra indicamos un error 404
		if(is_null ($resident))
			App::abort(404, 'El residente no existe.');

		//Asignamos los valores
		$resident->name = Input::get('name');
		$resident->lastname = Input::get('lastname');
		$resident->document = Input::get('document');
		$resident->email = Input::get('email');
		$resident->tel = Input::get('tel');
		$resident->mobile = Input::get('mobile');
		$resident->ownerId = Input::get('owner');

		//Guardamos, si se guarda redirecciona indicando que se pudo guardar, sino redirecciona indicando el error
		if($resident->save()):
			return Redirect::to('residentes')->with('success', 'Se han actualizado los datos exitosamente');
		else:
			return Redirect::to('residentes/'.$id.'edit')->with('error', 'No se pudieron actualizar los datos, por favor verifique que los campos esten correctamente diligenciados.');
		endif;
	}

	//Borramos el residente
	public function destroy($id)
	{
		if(Resident::destroy($id)):
			return Redirect::back()->with('success', 'Se ha borrado el residente.');
		else:
			return Redirect::back()->with('error', 'No se pudo borrar el residente.');
		endif;
	}

}