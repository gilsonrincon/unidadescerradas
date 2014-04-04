@extends('layout')

@section ('content')
	<section>
		<h1 class="title">
			Nuevo propietario
		</h1>
			<div class="content">
				{{ Form::open(array('route' => 'propietarios.store', 'method'=>'POST', 'id'=>'new-owner'), array('role'=>'form')) }}
				<div class="col-md-6">
					{{Form::text('name', '', array('class'=>'text require', 'placeholder'=>'Nombre:'))}}
					{{Form::text('lastname', '', array('class'=>'text require', 'placeholder'=>'Apellido:'))}}
					{{Form::text('document', '', array('class'=>'text require numeric', 'placeholder'=>'Documento:'))}}
				</div>
				<div class="col-md-6">
					{{Form::text('email', '', array('class'=>'text require email', 'placeholder'=>'Correo:'))}}
					{{Form::text('tel', '', array('class'=>'text require numeric', 'placeholder'=>'Telefono:'))}}
					{{Form::text('mobile', '', array('class'=>'text require numeric', 'placeholder'=>'Celular:'))}}
				</div>
				{{Form::submit('Guardar', array('class'=>'btn-submit', 'data-form'=>'new-owner'))}}
				{{ Form::close() }}
				<div class="validation">
					<p>&nbsp;</p>
				</div>
		</div>
	</section>
@stop