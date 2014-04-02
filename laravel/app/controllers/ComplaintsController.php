<?php

class ComplaintsController extends \BaseController {

	/*Index, se muestra el formulario para las quejas*/
	public function index()
	{
		return View::make('quejasYReclamos');
	}


	public function create()
	{
		//
	}

	/*Guardar una nueva queja*/
	public function store()
	{
		//Creamos la nueva queja y guardamos los campos
		$complaint = new Complaint();
		$complaint->title = Input::get('title');
		$complaint->userId = 1;
		$complaint->complaintDate = date('Y-m-d');
		$complaint->description = Input::get('description');
		
		//Guardamos la queja y redireccionamos
		if($complaint->save()):
			return Redirect::to('quejasyreclamos')->with('success', 'Su queja ha sido recibida.');
		else:
			return Redirect::to('quejasyreclamos')->withInput()->with('error', 'Ocurrio un error, no se pudo enviar la queja.');
		endif;
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