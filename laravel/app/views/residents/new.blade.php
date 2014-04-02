@extends('layout')

@section ('content')
	<section>
		<h1 class="title">
			Nuevo Residente
		</h1>
			<div class="content">
				{{ Form::open(array('route' => 'residentes.store', 'method'=>'POST'), array('role'=>'form')) }}
				<div class="col-md-6">
					{{Form::text('name', '', array('class'=>'text', 'placeholder'=>'Nombre:'))}}
					{{Form::text('lastname', '', array('class'=>'text', 'placeholder'=>'Apellido:'))}}
					{{Form::text('document', '', array('class'=>'text', 'placeholder'=>'Documento:'))}}
					{{Form::text('email', '', array('class'=>'text', 'placeholder'=>'Correo:'))}}
				</div>
				<div class="col-md-6">
					
					{{Form::text('tel', '', array('class'=>'text', 'placeholder'=>'Telefono:'))}}
					{{Form::text('mobile', '', array('class'=>'text', 'placeholder'=>'Celular:'))}}
					<select name="owner" class="text">
						<option value="0" >Seleccionar</option>
						@foreach ($owners as $owner)
							<option value="{{$owner->id}}" >{{$owner->name}} {{$owner->lastName}}</option>
						@endforeach
					</select>
				</div>
				{{Form::submit('Guardar', array('class'=>'btn-submit'))}}
				{{ Form::close() }}
		</div>
	</section>
@stop