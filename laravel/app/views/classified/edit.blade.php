{{ Form::model($classified, array('files' => true)) }}
	{{ Form::hidden('id',  $classified->id)}}

	<!-- Campo para el titulo -->
	{{ Form::label('title', 'Titulo') }}
	{{ Form::input('text', 'title', $classified->title) }}<br>
	
	<!-- Campo para la descripción corta -->
	{{ Form::label('shortDescription', 'Descripción corta') }}<br>
	{{ Form::textarea('shortDescription', $classified->shortDescription) }}<br>
	
	<!-- Campo para descripcion larga -->
	{{ Form::label('description', 'Descripción') }}<br>
	{{ Form::textarea('description', $classified->description) }}<br>

	<!-- Campo para subir la imagen -->
	{{ Form::label('image', 'Imagen') }}<br>
	{{ Form::file('image')}}<br>
	
	{{ Form::button('Guardar', array('type'=>'submit'))}}

{{ Form::close() }}

