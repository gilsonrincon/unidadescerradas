@extends ('layout')

@section ('scripts')
	<script>
		$(document).on('ready', function(){
			//Validamos el formulario
			$('#submit-reservation').click(function(event) {
				//Validamos que se seleccione un tipo de reservación
				if($('#type-reservation').val() == 0){
					$('.hide-content p').text('Debe seleccionar un tipo de reservación')
					$('.hide-container').fadeIn(500);
					event.preventDefault()
					return false
				}

				//Validamos la fecha
				if($('#date').val() == ''){
					$('.hide-content p').text('Debe colocar una fecha completa')
					$('.hide-container').fadeIn(500);
					event.preventDefault()
					return false
				}

				event.preventDefault()
				return false
			});

			//Ocultamos el hide container
			$('.hide-container').click(function(event) {
				$(this).fadeOut('500');
			});

			//Calendario
			$('#calendar').datetimepicker(
				{
					lang:'es',
					format:'Y-m-d H:i',
				}
			);
		})
	</script>
@stop

@section ('content')
	<section>
		<h1 class="title">
			RESERVACIÓN DE SERVICIOS
		</h1>
		<div id="reservations-container">
			<div id="reservations-text" class="col-md-12">
				<h2>
					PARA  HACER UNA RESERVACION DE ALGUN SERVIO DE LA UNIDAD DEBES :
				</h2>
				<p>
					llenar el formulario de reservacion el cual sera enviado a la administracion y ya ellos te haran saber cuando puedes tener el espacio y lo cambiaran en el calendario de evento, el valor cambia dependiendo del tipo de servicio que desea reservar ...
				</p> 
			</div>

			<div id="reservations-form" class="col-md-12">
				@if(Session::has('success'))
		            <p class="success">{{ Session::get('success') }}</p>
		        @endif

				@if(Session::has('error'))
			            <p class="error">{{ Session::get('error') }}</p>
			    @endif
				<h2>FORMULARIO DE RESERVACIÓN</h2>
				{{Form::open(array('url' => '/reservaciondeservicios'))}}
				<div class="col-md-6">
					<select id="type-reservation" class="text" name="type">
						<option value="0">TIPO DE RESERVACIÓN:</option>
						@foreach ($services as $s)
							<option value="{{ $s->id }}">{{$s->name}}</option>
						@endforeach
					</select>
					<textarea id="description-reservation" class="text" name="description" cols="10" rows="10" placeholder="DESCRIPCIÓN DE LA RESERVACIÓN"></textarea>
				</div>
				<div class="col-md-6">
					<input id="calendar" class="text" type="text" name="date">
					<input class="text" type="tel" name="tel" placeholder="TELEFONO:">
					<label><input type="checkbox" id="accept"> Acepto que quiero publicar esto en la plataforma</label>
					<input id="submit-reservation" type="submit" class="btn-submit" value="Reservar">
				</div>
				{{ Form::close() }}

				{{-- Usado para mostrar errores de validación --}}
				<div class="hide-container">
					<div class="hide-content">
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop