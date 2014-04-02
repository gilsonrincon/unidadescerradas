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
				<th>
					<td>Referencia</td>
					<td>Propietario</td>
					<td>Inquilino</td>
					<td>Acciones</td>
				</th>
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

