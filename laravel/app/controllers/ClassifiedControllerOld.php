<?php

//Controlador de usuarios, con este controlador, se crea, edita y borra usuarios
class ClassifiedController extends BaseController {

	/*
		Lista de todos los clasificados
	*/
	public function index()
	{
		$classified = Classified::all();
		return View::make('classified.index', array('classified'=>$classified));
	}

	/*
		Formulario para crear un nuevo clasificado
	*/

	public function create()
	{
		//Obtenemos la lista de usuarios
		$users = User::all();

		//Arreglo de los meses del año
		$months = array('Enero', 'Febrero', 'Marzo', 
						'Abril', 'Mayo', 'Junio', 
						'Julio', 'Agosto', 'Septiembre', 
						'Octubre', 'Noviembre', 'Diciembre');

		//Retornamos la vista, pasandole el arreglo de los meses.
		return View::make('classified.new', array('months'=>$months, 'users'=>$users));
	}

	/*
		Crear nuevos clasificados
	*/

	public function store()
	{
		//Creamos un nuevo clasificado
		$classified = new Classified();

		//Colocamos el titulo, la descripcion corta, descción larga y si es premium
		$classified->title = Input::get('title');
		$classified->shortDescription = Input::get('shortDescription');
		$classified->description = Input::get('description');
		$classified->premium = Input::get('premium');

		//Colocamos la fecha inicial, en este caso al mes le sumamos 1 ya que los valores de los meses
		//se colocan de 0 a 11 y aqui deben ser de 1 a 12
		$startMonth = Input::get('startMonth') + 1;
		$classified->startDate = Input::get('startYear').'-'.$startMonth.'-'.Input::get('startDay');

		//Colocamos la fecha final, igual que con el mes en la fecha inicial, a este mes tambien se le
		//suma 1. 
		$endMonth = Input::get('endMonth') + 1;
		$classified->endDate = Input::get('endYear').'-'.$endMonth.'-'.Input::get('endDay');

		//Colocamos el numero de impresiones, usuario y numero de clicks
		$classified->numberOfPrints = 0;
		$classified->userId = Input::get('user');
		$classified->clicks = 0;
		
		//Guardamos y retornamos a la lista de clasificados
		$classified->save();

		//En caso de que este la imagen
		if(Input::file('image')):
			//La copiamos en una carpeta classifiedImages
			$img = Input::file('image');
			$img->move("classifiedImages", $img->getClientOriginalName());

			//Obtenemos el ultimo clasificado
			$classified = Classified::all()->last();
			
			//Guardamos la imagen relacionandola con el ultimo clasificado
			$saveImg = new ImageClassified();
			$saveImg->image = $img->getClientOriginalName();
			$saveImg->classifiedId = $classified->id;
			$saveImg->save();
		endif;
		
		//Redireccionamos
		return Redirect::to('classified');
	}

	/*
		Editamos los clasificados
	*/
	public function edit($id)
	{
		//Obtenemos el clasificado
		$classified = Classified::find($id);

		//Arreglo de los meses del año
		$months = array('Enero', 'Febrero', 'Marzo', 
						'Abril', 'Mayo', 'Junio', 
						'Julio', 'Agosto', 'Septiembre', 
						'Octubre', 'Noviembre', 'Diciembre');

		//Retornamos la vista, pasandole el arreglo de los meses.
		return View::make('classified.edit', array('months'=>$months, 'classified'=>$classified));
	}

	/*
		Guardamos cuando se edita un clasificado
	*/

	public function update($id)
	{
		//$classified = Classified::find($id);
		//echo "hola";
	}	

	/*
		Borramos el clasificado
	*/
	public function delete($id)
	{

	}
}
