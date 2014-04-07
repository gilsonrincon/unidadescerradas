@extends ('layout')

@section ('content')
	<section>
		<h1 class="title">Editar Propiedad</h1>
		<div class="content">
			<div class="col-md-12">
				@if(Session::has('success'))
					<div class="alert alert-success">
					 	<p>{{ Session::get('success') }}</p>
					</div>  
		        @endif

				@if(Session::has('error'))
					<div class="alert alert-danger">
					    <p class="error">{{ Session::get('error') }}</p>
					</div>
			    @endif
			</div>
			{{ Form::open(array('route' => array('propiedades.update', $property->id), 'method'=>'PATCH'), array('role'=>'form')) }}
			<div class="col-md-6">
				{{Form::text('reference', $property->reference, array('class'=>'text require', 'placeholder'=>'Referencia:'))}}
			</div>
			<div class="col-md-6">
				<select name="owner" class="text">
					<option value="0">Seleccionar un propietario</option>
					@foreach ($owners as $owner)
						<option value="{{$owner->id}}" @if ($property->ownerId == $owner->id)
							selected="selected"
						@endif >{{$owner->name}} {{$owner->lastName}}</option>
					@endforeach
				</select>

				<select name="resident" class="text">
					<option value="0">Seleccionar un residente</option>
					@foreach ($residents as $resident)
						<option value="{{$resident->id}}" @if ($property->residentId == $resident->id)
							selected="selected"
						@endif >{{$resident->name}} {{$resident->lastName}}</option>
					@endforeach
				</select>
			</div>

			{{Form::submit('Guardar', array('class'=>'btn-submit'))}}

			{{ Form::close() }}
		</div>
	</section>
@stop