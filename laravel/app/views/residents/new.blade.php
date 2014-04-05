@extends('layout')

@section ('content')
	<section>
		<h1 class="title">
			Nuevo Residente
		</h1>
			<div class="content">
				{{ Form::open(array('route' => 'residentes.store', 'method'=>'POST', 'id'=>'new-resident'), array('role'=>'form')) }}
				<div class="col-md-6">
					{{Form::text('name', '', array('class'=>'text require', 'placeholder'=>'Nombre:'))}}
					{{Form::text('lastname', '', array('class'=>'text require', 'placeholder'=>'Apellido:'))}}
					{{Form::text('document', '', array('class'=>'text require numeric', 'placeholder'=>'Documento:'))}}
					{{Form::text('email', '', array('class'=>'text require email', 'placeholder'=>'Correo:'))}}
				</div>
				<div class="col-md-6">
					
					{{Form::text('tel', '', array('class'=>'text require numeric', 'placeholder'=>'Telefono:'))}}
					{{Form::text('mobile', '', array('class'=>'text require numeric', 'placeholder'=>'Celular:'))}}
					<select name="owner" class="text">
						<option value="0" >No es propietario</option>
						@foreach ($owners as $owner)
							<option value="{{$owner->id}}" >{{$owner->name}} {{$owner->lastName}}</option>
						@endforeach
					</select>
				</div>
				<div class="col-md-12 validation">
					<p>&nbsp;</p>
				</div>
				{{Form::submit('Guardar', array('class'=>'btn-submit', 'data-form'=>'new-resident'))}}
				{{ Form::close() }}
		</div>
	</section>
@stop