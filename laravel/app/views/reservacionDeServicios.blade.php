@extends ('layout')

@section ('scripts')
	<script>
		$(document).on('ready', function(){
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
				{{Form::open(array('url' => '/reservaciondeservicios', 'id'=>'new-reservation'))}}
				<div class="col-md-6">
					<select id="type-reservation" class="text require" name="type">
						<option value="">TIPO DE RESERVACIÓN:</option>
						@foreach ($services as $s)
							<option value="{{ $s->id }}">{{$s->name}}</option>
						@endforeach
					</select>
					<textarea id="description-reservation" class="text" name="description" cols="10" rows="10" placeholder="DESCRIPCIÓN DE LA RESERVACIÓN"></textarea>
				</div>
				<div class="col-md-6">
					<input id="calendar" class="text require" type="text" name="date" placeholder="Fecha y hora:">
					<input class="text" type="tel numeric" name="tel" placeholder="TELEFONO:">
					<label class="accept-label"><input class="require accept" type="checkbox" id="accept"> Acepto que quiero publicar esto en la plataforma</label>
					<input id="submit-reservation" type="submit" class="btn-submit" data-form='new-reservation' value="Reservar">
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