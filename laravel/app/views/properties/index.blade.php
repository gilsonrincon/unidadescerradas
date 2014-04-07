@extends('layout')

@section ('content')
	<section>
		<h1 class="title">
			Administración de propiedades
		</h1>
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
			{{ link_to('propiedades/create', 'Nueva Propiedad', array('class'=>'btn btn-primary')) }}
			<br><br>
			<table class="table table-striped">
				<tr>
					<th>Referencia</th>
					<th>Propietario</th>
					<th>Inquilino</th>
					<th>Acciones</th>
				</tr>
				@foreach($properties as $property)
					<tr>
						<td>{{$property->reference}}</td>
						<td>
							@if($property->owner)
								{{$property->owner->name}} {{$property->owner->lastname}}
							@endif
						</td>
						<td>
							@if($property->resident)
								{{$property->resident->name}} {{$property->resident->lastname}}
							@endif
						</td>
						<td>
							{{ link_to('propiedades/'.$property->id.'/edit', 'Editar', array('class'=>'btn btn-default'))}}
							{{Form::model($property, array('route' => array('propiedades.destroy', $property->id), 'method' => 'DELETE', 'role' => 'form'))}}
								{{ Form::submit('Borrar', array('class' => 'btn btn-danger delete')) }}
							{{Form::close()}}
						</td>
					</tr>
				@endforeach
			</table>
		</div>
	</section>
	
@stop

