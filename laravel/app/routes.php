<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Ruta del Home
Route::get('/', function()
{
	return View::make('home');
});

//Ruta de la reservacion de los servicios
Route::get('reservaciondeservicios', function()
{
	return View::make('reservacionDeServicios');
});

//Ruta del calendario de eventos
Route::get('calendariodeeventos', function()
{
	return View::make('calendarioDeEventos');
});

//Ruta de los clasificados
Route::get('todoslosclasificados', function()
{
	return View::make('todosLosClasificados');
});

//Ruta para registrarse
Route::get('registrarse', function()
{
	return View::make('registrarse');
});

//Ruta de quejas y reclamos
Route::get('quejasyreclamos', function()
{
	return View::make('quejasYReclamos');
});

//Ruta para publicar información
Route::get('publicarinformacion', function()
{
	return View::make('publicarInformacion');
});

//Ruta para el pago de la administración
Route::get('pagaradministracion', function()
{
	return View::make('pagarAdministracion');
});

//Ruta para ingresar
Route::get('ingresar', function()
{
	return View::make('ingresar');
});

//Ruta de la información de las unidades
Route::get('informacionunidad', function()
{
	return View::make('informacionUnidad');
});

//Ruta de la información de los clasificados
Route::get('informacionclasificados', function()
{
	return View::make('informacionClasificados');
});

//Ruta de los documentos de la unidad
Route::get('documentosdelaunidad', function()
{
	return View::make('documentosDeLaUnidad');
});

//Ruta de contacto
Route::get('contacto', function()
{
	return View::make('contacto');
});



/*Rutas del controlador de usuarios*/
Route::resource('users', 'UsersController');

//Rutas para el controlador de los clasificados
Route::resource('classified', 'ClassifiedController');