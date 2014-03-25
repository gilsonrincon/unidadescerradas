<?php

class BulletinBoardController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$bulletins = BulletinBoard::all();
		return View::make('bulletinBoard.index', array('bulletins'=>$bulletins));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//Obtenemos la lista de usuarios
		$users = User::all();

		//Arreglo de los meses del año
		$months['1'] = 'Enero';
		$months['2'] = 'Febrero';
		$months['3'] = 'Marzo';
		$months['4'] = 'Abril'; 
		$months['5'] = 'Mayo';
		$months['6'] = 'Junio';
		$months['7'] = 'Julio';
		$months['8'] = 'Agosto';
		$months['9'] = 'Septiembre';
		$months['10'] = 'Octubre';
		$months['11'] = 'Noviembre';
		$months['12'] ='Diciembre';

		$date['day'] = date('d');
		$date['month'] = date('m');
		$date['year'] = date('y') + 2000;

		//Retornamos la vista, pasandole el arreglo de los meses, usuarios y fecha.
		return View::make('bulletinBoard.new', array('months' => $months, 'users' => $users, 'date'=>$date));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//Creamos un nuevo boletin
		$bulletin = new BulletinBoard();

		//Colocamos el titulo, la descripcion corta, descción larga y si es premium
		$bulletin->title = Input::get('title');
		$bulletin->shortDescription = Input::get('shortDescription');
		$bulletin->description = Input::get('description');

		//Colocamos la fecha inicial
		$bulletin->startDate = Input::get('startYear').'-'.Input::get('startMonth').'-'.Input::get('startDay');

		//Colocamos la fecha final
		$bulletin->endDate = Input::get('endYear').'-'.Input::get('endMonth').'-'.Input::get('endDay');

		//Colocamos el usuario
		$bulletin->userId = Input::get('user');

		//Guardamos el botetin
		$bulletin->save();

		//En caso de que este la imagen
		if(Input::file('image')):
			//La copiamos en una carpeta bulletinsImages
			$img = Input::file('image');
			$img->move("bulletinsImages", $img->getClientOriginalName());

			//Obtenemos el ultimo boletin
			$bulletin = BulletinBoard::all()->last();
			
			//Guardamos la imagen relacionandola con el ultimo clasificado
			$saveImg = new ImageBulletinBoard();
			$saveImg->image = $img->getClientOriginalName();
			$saveImg->bulletinId = $bulletin->id;
			$saveImg->save();
		endif;

		//Redireccionamos
		return Redirect::to('bulletins');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}