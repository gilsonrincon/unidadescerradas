@extends('layout')

@section ('content')
	<section>
		<h1 class="title">
			Editar propietario
		</h1>
			<div class="content">
				{{Form::open(array('route' => array('propietarios.update', $owner->id), 'id'=>'edit-owner', 'method'=>'PATCH'))}}
				<div class="col-md-6">
					{{Form::text('name', $owner->name, array('class'=>'text require', 'placeholder'=>'Nombre:'))}}
					{{Form::text('lastname', $owner->lastName, array('class'=>'text require', 'placeholder'=>'Apellido:'))}}
					{{Form::text('document', $owner->document, array('class'=>'text require numeric', 'placeholder'=>'Documento:'))}}
				</div>
				<div class="col-md-6">
					{{Form::text('email', $owner->email, array('class'=>'text require email', 'placeholder'=>'Correo:'))}}
					{{Form::text('tel', $owner->tel, array('class'=>'text require numeric', 'placeholder'=>'Telefono:'))}}
					{{Form::text('mobile', $owner->mobile, array('class'=>'text require numeric', 'placeholder'=>'Celular:'))}}
				</div>
				{{Form::submit('Guardar', array('class'=>'btn-submit', 'data-form'=>'edit-owner'))}}
				{{Form::close()}}
				<div class="validation">
					<p>&nbsp;</p>
				</div>
		</div>
	</section>
@stop