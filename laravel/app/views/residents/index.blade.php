@extends('layout')

@section ('content')
	<section>
		<h1 class="title">
			Administración de residentes
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
			{{ link_to('residentes/create', 'Nuevo Residente', array('class'=>'btn btn-primary')) }}
			<br><br>
			<table class="table table-striped">
				<tr>
					<th>Nombre</th>
					<th>Documento</th>
					<th>Celular</th>
					<th>Acciones</th>
				</tr>
				@foreach($residents as $resident)
					<tr>
						<td>{{$resident->name}} {{$resident->lastname}}</td>
						<td>{{$resident->document}}</td>
						<td>{{$resident->mobile}}</td>
						<td>
							{{ link_to('residentes/'.$resident->id.'/edit', 'Editar', array('class'=>'btn btn-default'))}}
							{{Form::model($resident, array('route' => array('residentes.destroy', $resident->id), 'method' => 'DELETE', 'role' => 'form'))}}
								{{ Form::submit('Borrar', array('class' => 'btn btn-danger delete')) }}
							{{Form::close()}}
						</td>
					</tr>
				@endforeach
			</table>
		</div>
	</section>
	
@stop

