@extends('layout')

@section('content')
	<section>
 		<h1 class="title">Nuevo Usuario</h1>
 		<div class="content">
			{{ Form::open(array('route' => 'usuarios.store', 'method'=>'POST', 'id'=>'new-user'), array('role'=>'form')) }}
				<div class="col-md-6">
					{{Form::text('username', '', array('class'=>'text require', 'placeholder'=>'Nombre de usuario:'))}}
					{{Form::password('password', array('class'=>'text require', 'placeholder'=>'Contraseña:'))}}
					{{Form::text('email', '', array('class'=>'text require email', 'placeholder'=>'Email'))}}
				</div>
				

				<div class="col-md-6">
					<select name="userType" class="text require">
						<option value="">Tipo de usuario:</option>
						<option value="0">Normal</option>
						<option value="1">Administrador</option>
					</select>

					<select name="owner" class="text">
						<option value="0">No es propietario:</option>
						@foreach ($owners as $owner)
							<option value="{{$owner->id}}">{{$owner->name}} {{$owner->lastName}}</option>
						@endforeach
					</select>

					<select name="resident" id="" class="text">
						<option value="0">No es residente</option>
						@foreach ($residents as $resident)
							<option value="{{$resident->id}}">{{$resident->name}} {{$resident->lastName}}</option>
						@endforeach
					</select>
				</div>
				{{Form::submit('Guardar', array('class'=>'btn-submit', 'data-form'=>'new-user'))}}

			{{ Form::close() }}

			<div class="validation col-md-12">
				<p>&nbsp;</p>
			</div>
		</div>
	</section>
@stop