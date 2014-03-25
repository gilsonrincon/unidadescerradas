{{ Form::open(array('route' => 'bulletins.store', 'method'=>'POST', 'files'=>true), array('role'=>'form')) }}
	<!-- Campo para el titulo -->
	{{ Form::label('title', 'Titulo') }}
	{{ Form::input('text', 'title') }}<br>
	
	<!-- Campo para la descripción corta -->
	{{ Form::label('shortDescription', 'Descripción corta') }}<br>
	{{ Form::textarea('shortDescription', '') }}<br>
	
	<!-- Campo para descripcion larga -->
	{{ Form::label('description', 'Descripción') }}<br>
	{{ Form::textarea('description', '') }}<br>
	
	<br>
	<!-- Fecha de inicio -->
	Fecha de inicio:
	{{ Form::label('startDay', 'Día') }}
	<select name="startDay">
		@for ($i = 1; $i <= 31; $i++)
			@if ($date['day'] == $i)
				<option selected="selected" value="{{ $i }}">{{$i}}</option>
			@else 
				<option value="{{ $i }}">{{$i}}</option>
			@endif
		@endfor
	</select>

	{{ Form::label('startMonth', 'Mes') }}
	<select name="startMonth">
		@for ($i = 1; $i <= 12 ; $i++)
			@if ($date['month'] == $i)
				<option selected="selected" value="{{$i}}">{{ $months[$i] }}</option>
			@else
				<option value="{{$i}}">{{ $months[$i] }}</option>
			@endif
		@endfor
	</select>

	{{ Form::label('startYear', 'Año') }}
	<select name="startYear">
		@for ($i = 2010; $i <= 2050; $i++)
			@if ($date['year'] == $i)
				<option selected="selected" value="{{ $i }}">{{$i}}</option>
			@else 
				<option value="{{ $i }}">{{$i}}</option>
			@endif
		@endfor
	</select>
	<br>

	<!-- Fecha final -->
	Fecha final:
	{{ Form::label('endDay', 'Día') }}
	<select name="endDay">
		@for ($i = 1; $i <= 31; $i++)
			@if ($date['day'] == $i)
				<option selected="selected" value="{{ $i }}">{{$i}}</option>
			@else 
				<option value="{{ $i }}">{{$i}}</option>
			@endif
		@endfor
	</select>

	{{ Form::label('endMonth', 'Mes') }}
	<select name="endMonth" id="">
		@for ($i = 1; $i <= 12 ; $i++)
			@if ($date['month'] == $i)
				<option selected="selected" value="{{$i}}">{{ $months[$i] }}</option>
			@else
				<option value="{{$i}}">{{ $months[$i] }}</option>
			@endif
		@endfor
	</select>

	{{ Form::label('endYear', 'Año') }}
	<select name="endYear">
		@for ($i = 2010; $i <= 2050; $i++)
			@if ($date['year'] == $i)
				<option selected="selected" value="{{ $i }}">{{$i}}</option>
			@else 
				<option value="{{ $i }}">{{$i}}</option>
			@endif
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
	<br>
	{{ Form::button('Guardar', array('type'=>'submit'))}}

{{ Form::close() }}