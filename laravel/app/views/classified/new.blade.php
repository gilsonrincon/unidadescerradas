{{ Form::open(array('route' => 'classified.store', 'method'=>'POST', 'files'=>true), array('role'=>'form')) }}
	<!-- Campo para el titulo -->
	{{ Form::label('title', 'Titulo') }}
	{{ Form::input('text', 'title') }}<br>
	
	<!-- Campo para la descripción corta -->
	{{ Form::label('shortDescription', 'Descripción corta') }}<br>
	{{ Form::textarea('shortDescription', '') }}<br>
	
	<!-- Campo para descripcion larga -->
	{{ Form::label('description', 'Descripción') }}<br>
	{{ Form::textarea('description', '') }}<br>
	
	<!--Es de paga -->
	Premium:<br>
	{{ Form::label('premium', 'No') }}
	{{ Form::radio('premium', '0', true) }}
	{{ Form::label('premium', 'Si') }}
	{{ Form::radio('premium', '1') }}
	<br>
	<!-- Fecha de inicio -->

	Fecha de inicio:
	{{ Form::label('startDay', 'Día') }}
	<select name="startDay">
		@for ($i = 1; $i <= 31; $i++)
			<option value="{{ $i }}">{{$i}}</option>
		@endfor
	</select>

	{{ Form::label('startMonth', 'Mes') }}
	{{ Form::select('startMonth', $months)}}

	{{ Form::label('startYear', 'Año') }}
	<select name="startYear">
		@for ($i = 2014; $i <= 2020; $i++)
			<option value="{{ $i }}">{{$i}}</option>
		@endfor
	</select>
	<br>
	<!-- Fecha final -->

	Fecha final:
	{{ Form::label('endDay', 'Día') }}
	<select name="endDay">
		@for ($i = 1; $i <= 31; $i++)
			<option value="{{ $i }}">{{$i}}</option>
		@endfor
	</select>

	{{ Form::label('endMonth', 'Mes') }}
	{{ Form::select('endMonth', $months)}}

	{{ Form::label('endYear', 'Año') }}
	<select name="endYear">
		@for ($i = 2014; $i <= 2020; $i++)
			<option value="{{ $i }}">{{$i}}</option>
		@endfor
	</select>
	<br>

	<!-- Usuario -->
	<select name="user">
		@foreach ($users as $user)
			<option value="{{ $user->id }}">{{ $user->username }}</option>
		@endforeach
	</select>

	<!--Imagen -->
	{{ Form::file('image')}}

	{{ Form::button('Guardar', array('type'=>'submit'))}}

{{ Form::close() }}