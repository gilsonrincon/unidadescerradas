@extends('layout')

@section ('content')
	<section>
		<h1 class="title">
			Editar propietario
		</h1>
			<div class="content">
				{{ Form::open(array('route' => 'propietarios.update', 'method'=>'POST'), array('role'=>'form')) }}
				<div class="col-md-6">
					{{Form::text('name', $owner->name, array('class'=>'text', 'placeholder'=>'Nombre:'))}}
					{{Form::text('lastname', $owner->lastName, array('class'=>'text', 'placeholder'=>'Apellido:'))}}
					{{Form::text('document', $owner->document, array('class'=>'text', 'placeholder'=>'Documento:'))}}
				</div>
				<div class="col-md-6">
					{{Form::text('email', $owner->email, array('class'=>'text', 'placeholder'=>'Correo:'))}}
					{{Form::text('tel', $owner->tel, array('class'=>'text', 'placeholder'=>'Telefono:'))}}
					{{Form::text('mobile', $owner->mobile, array('class'=>'text', 'placeholder'=>'Celular:'))}}
				</div>
				{{Form::submit('Guardar', array('class'=>'btn-submit'))}}
				{{ Form::close() }}
		</div>
	</section>
@stop