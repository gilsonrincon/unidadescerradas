@extends('layout')

@section('content')
	<h1 class="title">Administración de usuarios</h1>
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
		{{ link_to('usuarios/create', 'Nuevo Usuario', array('class'=>'btn btn-primary')) }}<br><br>
		<table class="table">
			<tr>
				<th>Nombre de usuario</th>
				<th>Tipo de usuario</th>
				<th></th>
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
				<td>
					{{Form::model($user, array('route' => array('usuarios.destroy', $user->id), 'method' => 'DELETE', 'role' => 'form'))}}
						{{ Form::submit('Borrar', array('class' => 'btn btn-danger delete')) }}
					{{Form::close()}}
				</td>
			</tr>
		@endforeach
		</table>
		<ul>
		
		</ul>
	</div>
@stop