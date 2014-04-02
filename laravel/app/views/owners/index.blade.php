@extends('layout')

@section ('content')
	<section>
		<h1 class="title">
			Administración de propietarios
		</h1>
		<div class="content">
			{{ link_to('propietarios/create', 'Nuevo Propietario') }}
			<br>
			<table class="table">
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
							{{ link_to('propietarios/'.$owner->id.'/edit', 'Editar')}}
						</td>
					</tr>
				@endforeach
			</table>
		</div>
	</section>
	
@stop

