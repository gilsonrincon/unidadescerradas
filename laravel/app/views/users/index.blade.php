@extends('layout')

@section('content')
	<h1 class="title">Administración de usuarios</h1>
	<div class="content">
		{{ link_to('usuarios/create', 'Nuevo Usuario') }}
		<table class="table">
			<tr>
				<th>Nombre de usuario</th>
				<th>Tipo de usuario</th>
			</tr>
			@foreach($users as $user)
			<tr>
				<td>{{ $user->username }}</td>
				<td>
					@if ($user->userType == 0)
						Normal
					@else 
						Administrador
					@endif
				</td>
			</tr>
		@endforeach
		</table>
		<ul>
		
		</ul>
	</div>
@stop