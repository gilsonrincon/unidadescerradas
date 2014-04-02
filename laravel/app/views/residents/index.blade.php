@extends('layout')

@section ('content')
	<section>
		<h1 class="title">
			Administración de propietarios
		</h1>
		<div class="content">
			{{ link_to('residentes/create', 'Nuevo Residente') }}
			<br>
			<table class="table">
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
							{{ link_to('residentes/'.$resident->id.'/edit', 'Editar')}}
						</td>
					</tr>
				@endforeach
			</table>
		</div>
	</section>
	
@stop

