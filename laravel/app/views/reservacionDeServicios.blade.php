@extends ('layout')

@section ('scripts')
	<script>
		$(document).on('ready', function(){
			//Validamos el formulario
			$('#submit-reservation').click(function(event) {
				//variable que define si es valido, por defecto no lo sera
				$is_valid = true
				//Validamos que se seleccione un tipo de reservación
				if($('#type-reservation').val() == 0){
					$('#type-reservation').css('border', '1px solid #ff002f');
					$is_valid = false
				}	

				//Validamos la fecha
				if($('#calendar').val() == ''){
					$('#calendar').css('border', '1px solid #ff002f');
					$is_valid = false
				}

				//Validamos que se acepten las condiciones del servicio
				if($('#accept').is(':checked') == false){
					$('#accept-label').css('color', '#ff002f');
					$is_valid = false
				}

				/*En caso de no ser valido interrumpe el envio del formulario*/
				if($is_valid == false){
					$('.validation').css('visibility', 'visible');
					event.preventDefault()
					return false
				}
				
			});

			/*Al dar click en uno de los elementos validados regresa a su color normal*/
			$('#type-reservation, #calendar').click(function(event) {
				$(this).css('border', '1px solid #000')
				$('.validation').css('visibility', 'hidden');
			});

			/*El color del texto regresa normal cuando se da click en aceptar publicar esto*/
			$('#accept, #accept-label').click(function(event) {
				$('#accept-label').css('color', '#000')
				$('.validation').css('visibility', 'hidden');
			});

			//Ocultamos el hide container
			$('.hide-container').click(function(event) {
				$(this).fadeOut('500');
			});

			//Calendario
			$('#calendar').datetimepicker(
				{
					lang:'es',
					format:'Y-m-d H:i:s',
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
					PARA  HACER UNA RESERVACION DE ALGUN SERVICIO DE LA UNIDAD DEBES :
				</h2>
				<p>
					llenar el formulario de reservacion el cual sera enviado a la administracion y ya ellos te haran saber cuando puedes tener el espacio y lo cambiaran en el calendario de evento, el valor cambia dependiendo del tipo de servicio que desea reservar ...
				</p> 
			</div>

			<div id="reservations-form" class="col-md-12">
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
					<input id="calendar" class="text" type="text" name="date" placeholder="Fecha y hora:">
					<input class="text" type="tel" name="tel" placeholder="TELEFONO:">
					<label id="accept-label"><input type="checkbox" id="accept"> Acepto que quiero publicar esto en la plataforma</label>
					<input id="submit-reservation" type="submit" class="btn-submit" value="Reservar">
				</div>
				{{ Form::close() }}
			</div>
			<div class="col-md-12">
				{{-- Usado para mostrar errores de validación --}}
				<div class="validation">
					<p>Debe llenar adecuadamente todos los campos marcados con <span style="color: #ff002f">ROJO</span></p>
				</div>
			</div>
		</div>
	</section>
@stop