@extends('layout')

@section ('content')
	<section>
		<h1 class="title">
			Nuevo propietario
		</h1>
			<div class="content">
				{{ Form::open(array('route' => 'propietarios.store', 'method'=>'POST'), array('role'=>'form')) }}
				<div class="col-md-6">
					{{Form::text('name', '', array('class'=>'text', 'placeholder'=>'Nombre:'))}}
					{{Form::text('lastname', '', array('class'=>'text', 'placeholder'=>'Apellido:'))}}
					{{Form::text('document', '', array('class'=>'text', 'placeholder'=>'Documento:'))}}
				</div>
				<div class="col-md-6">
					{{Form::text('email', '', array('class'=>'text', 'placeholder'=>'Correo:'))}}
					{{Form::text('tel', '', array('class'=>'text', 'placeholder'=>'Telefono:'))}}
					{{Form::text('mobile', '', array('class'=>'text', 'placeholder'=>'Celular:'))}}
				</div>
				{{Form::submit('Guardar', array('class'=>'btn-submit'))}}
				{{ Form::close() }}
		</div>
	</section>
@stop