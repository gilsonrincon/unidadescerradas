{{ Form::open(array('route' => 'users.store', 'method'=>'POST'), array('role'=>'form')) }}
	<!-- Campo para el nombre de usuario -->
	{{ Form::label('username', 'Nombre de usuario') }}
	{{ Form::input('text', 'username') }}<br>
	
	<!-- Campo para la contraseña -->
	{{ Form::label('password', 'Contraseña') }}
	{{ Form::input('password', 'password', '')}}<br>

	<!-- Campo para el tipo de usuario -->
	{{ Form::label('userType', 'Tipo de usuario') }}
	{{ Form::select('userType', array('admin'=>'administrador', 'normal'=>'normal')) }}<br>

	<!-- Identidad como propietario -->
	{{ Form::label('ownerId', 'Propietario') }}
	{{ Form::select('ownerId', array('0'=>'No es propietario')) }}<br>

	<!-- Identidad como residente -->
	{{ Form::label('residentId', 'Residente') }}
	{{ Form::select('residentId', array('0'=>'No es residente')) }}<br>

	{{ Form::button('Guardar', array('type'=>'submit'))}}

{{ Form::close() }}