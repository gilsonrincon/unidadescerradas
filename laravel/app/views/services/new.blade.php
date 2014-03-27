{{ Form::open(array('route' => 'services.store', 'method'=>'POST', 'files'=>true), array('role'=>'form')) }}
	<!-- Campo para el nombre -->
	{{ Form::label('name', 'Nombre') }}
	{{ Form::input('text', 'name') }}<br>

	<!-- Campo para el valor -->
	{{ Form::label('value', 'Valor') }}
	{{ Form::input('text', 'value') }}<br>
	
	<!-- Campo para descripcion larga -->
	{{ Form::label('description', 'Descripción') }}<br>
	{{ Form::textarea('description', '') }}<br>
	

	<!-- Estado -->
	<select name="status">
		<option value="Estado 1">Estado 1</option>
		<option value="Estado 2">Estado 2</option>
		<option value="Estado 3">Estado 3</option>
	</select>

	{{ Form::button('Guardar', array('type'=>'submit'))}}

{{ Form::close() }}