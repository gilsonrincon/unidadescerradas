@extends ('layout')

@section ('content')
	<section>
		<h1 class="title">Nueva Propiedad</h1>
		<div class="content">
			{{ Form::open(array('route' => 'propiedades.store', 'method'=>'POST'), array('role'=>'form')) }}
			<div class="col-md-6">
				{{Form::text('reference', '', array('class'=>'text require', 'placeholder'=>'Referencia:'))}}
			</div>
			<div class="col-md-6">
				<select name="owner" class="text">
					<option value="0">Seleccionar un propietario</option>
					@foreach ($owners as $owner)
						<option value="{{$owner->id}}">{{$owner->name}} {{$owner->lastName}}</option>
					@endforeach
				</select>

				<select name="resident" class="text">
					<option value="0">Seleccionar un residente</option>
					@foreach ($residents as $resident)
						<option value="{{$resident->id}}">{{$resident->name}} {{$resident->lastName}}</option>
					@endforeach
				</select>
			</div>

			{{Form::submit('Guardar', array('class'=>'btn-submit'))}}

			{{ Form::close() }}
		</div>
	</section>
@stop