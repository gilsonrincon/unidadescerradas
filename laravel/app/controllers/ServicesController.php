<?php

class ServicesController extends \BaseController {
	
	/*
		Lista de todos los servicios
	*/
	public function index()
	{
		$services = Service::all();
		return View::make('services.index', array('services'=>$services));
	}

	/*
		Formulario para crear un nuevo servicio
	*/
	public function create()
	{
		//Obtenemos la lista de usuarios
		$users = User::all();

		//Retornamos la vista
		return View::make('services.new', array('users'=>$users));
	}

	/*
		Crear nuevos servicios
	*/
	public function store()
	{
		//Creamos un nuevo servicio
		$service = new Service();

		//Colocamos el titulo, la descripcion corta, descción larga y si es premium
		$service->name = Input::get('name');
		$service->value = Input::get('value');
		$service->description = Input::get('description');
		$service->status = Input::get('status');

		//Guardamos y retornamos a la lista de servicios
		$service->save();
		
		//Redireccionamos
		return Redirect::to('services');
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