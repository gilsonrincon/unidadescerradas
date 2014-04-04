@extends('layout')

@section ('scripts')
	<script>
		$(document).on('ready', function(){
			//Click en un boton para borrar el propietario, se pide confirmación
			$('.delete').click(function(event) {
				if(confirm('¿Esta seguro que quiere borrar este propietario?')==false){
					event.preventDefault()
					return false
				}
			});
		})
	</script>
@stop

@section ('content')
	<section>
		<h1 class="title">
			Administración de propietarios
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

			{{ link_to('propietarios/create', 'Nuevo Propietario', array('class'=>'btn btn-primary')) }}<br>
			<br>
			<table class="table table-striped">
				<tr>
					<th>Nombre</th>
					<th>Documento</th>
					<th>Celular</th>
					<th>Acciones</th>
				</tr>
				@foreach($owners as $owner)
					<tr>
						<td>{{$owner->name}} {{$owner->lastname}}</td>
						<td>{{$owner->document}}</td>
						<td>{{$owner->mobile}}</td>
						<td>
							{{ link_to('propietarios/'.$owner->id.'/edit', 'Editar', array('class'=>'btn btn-default'))}}
							{{Form::model($owner, array('route' => array('propietarios.destroy', $owner->id), 'method' => 'DELETE', 'role' => 'form'))}}
								{{ Form::submit('Borrar', array('class' => 'btn btn-danger delete')) }}
							{{Form::close()}}
						</td>
					</tr>
				@endforeach
			</table>
		</div>
	</section>
	
@stop

