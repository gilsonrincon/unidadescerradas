@extends('layout')

@section ('content')
	<section>
		<h1 class="title">
			Administración de propiedades
		</h1>
		<div class="content">
			{{ link_to('propiedades/create', 'Nueva Propiedad') }}
			<br>
			<table class="table">
				<tr>
					<th>Referencia</th>
					<th>Propietario</th>
					<th>Inquilino</th>
					<th>Acciones</th>
				</tr>
				@foreach($properties as $property)
					<tr>
						<td>{{$property->reference}}</td>
						<td>{{$property->owner->name}} {{$property->owner->lastname}}</td>
					</tr>
				@endforeach
			</table>
		</div>
	</section>
	
@stop

