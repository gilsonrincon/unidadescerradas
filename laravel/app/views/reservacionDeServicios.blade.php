@extends ('layout')

@section ('content')
	<section>
		<h1 class="title">
			RESERVACIÓN DE SERVICIOS
		</h1>
		<div id="reservations-container">
			<div id="calendar" class="col-md-6">
				<img class="col-md-12" src="assets/images/calendarImage.png" alt="Calendario">
			</div>
			<div id="reservations-text" class="col-md-6">
				<h2>
					PARA  HACER UNA RESERVACION DE ALGUN SERVIO DE LA UNIDAD DEBES :
				</h2>
				<p>
					llenar el formulario de reservacion el cual sera enviado a la administracion y ya ellos te haran saber cuando puedes tener el espacio y lo cambiaran en el calendario de evento, el valor cambia dependiendo del tipo de servicio que desea reservar ...
				</p> 
			</div>

			<div id="reservations-form" class="col-md-12">
				<h2>FORMULARIO DE RESERVACIÓN</h2>
				{{ Form::open() }}
				<div class="col-md-6">
					<select id="type-reservation" class="text" name="type">
						<option value="0">TIPO DE RESERVACIÓN:</option>
						@foreach ($services as $s)
							<option value="{{ $s->id }}">{{$s->name}}</option>
						@endforeach
					</select>
					<textarea id="description-reservation" class="text" name="description" cols="10" rows="10">DESCRIPCIÓN DE LA RESERVACIÓN</textarea>
				</div>
				<div class="col-md-6">
					<input class="text" type="date" name="date">
					<input class="text" type="text" name="tel" placeholder="TELEFONO:">
					<label><input type="checkbox" id="accept"> Acepto que quiero publicar esto en la plataforma</label>
					<input type="submit" class="btn-submit" value="Reservar">
				</div>
				{{ Form::close() }}
			</div>
		</div>
	</section>
@stop