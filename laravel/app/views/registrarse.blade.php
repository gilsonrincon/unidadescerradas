@extends ('layout')

@section ('content')
	<section>
		<h1 class="title">
			Formulario de registro
		</h1>
		<div id="register" class="col-md-12">
			<p>años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, "consecteur", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, </p>
			{{Form::open()}}
			<div class="col-md-6">
				<input class="text" type="text" placeholder="Nombre:" name="name">
				<input class="text" type="text" placeholder="Correo:" name="mail">
				<input class="text" type="text" placeholder="Telefono:" name="tel">
			</div>
			<div class="col-md-6">
				<input class="text" type="text" placeholder="Apartamento:" name="name">
				<select class="text" name="owner" id="">
					<option>Dueño...Arrendatario</option>
					@foreach ($owners as $owner)
						<option value="{{ $owner->id }}">{{ $owner->name }} {{ $owner->lastName }}</option>
					@endforeach
				</select>
				<input class="text" type="password" placeholder="Contraseña:" name="password">
				<input id="terms" type="checkbox" name="terms"><label for="terms">Acepto Terminos de uso</label>
				<input class="btn-submit" type="submit" Value="Registrarse">
			</div>
			<div class="col-md-6"></div>
			{{Form::close()}}
		</div>
	</section>
@stop