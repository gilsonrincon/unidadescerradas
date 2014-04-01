@extends ('layout')

@section ('content')
	<section>
	<div class="title">PUBLIQUE SU CLASIFICADO</div>
		<div class="content" style="padding: 50px 10% 30px 10%">
			<p>años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-2 OPCIONES, encontró una de las palabras más oscuras de la lengua del latín, "consecteur", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, </p>
			<div class="col-md-6 classified-form">
				<h2>OPCION #1</h2>
				{{Form::open()}}
					<p>Con esta opcion podras publicar totalmente gratis en el portal del sitio y aparecera en la seccion de clasificados (Solo texto)</p>
					<div style="text-align: right;"><span style="color: #969696">60  caracteres  disponibles</span></div>
					<textarea class="text" name="shortDescription" cols="30" rows="10" placeholder="inserte su clasificado  (Solo texto)"></textarea>
					{{Form::checkbox('accept_no_premium', 'accept', false, array('id' => 'accept_no_premium'))}}
					{{Form::label('accept_no_premium', 'Acepto que quiero publicar esto en la plataforma')}}
					{{Form::submit('PUBLICAR', array('class'=>'btn-submit-classified'))}}
				{{Form::close()}}
			</div>

			<div class="col-md-6 classified-form">
				<h2>OPCION #2</h2>
				{{Form::open()}}
					<p>Con esta opcion puedes publicar y subir imagenes tiene <span style="color: #007F54">costo de $10.000</span>  y este clasificado sera enviado por correo masivo  (texto  e imagenes)</p>
					{{Form::text('title', '', array('placeholder'=>'Mi titulo:', 'class'=>'text'))}}
					{{Form::file('image1')}}<br>
					{{Form::file('image2')}}<br>
					{{Form::file('image3')}}<br>
					<div style="text-align: right;"><span style="color: #969696">60  caracteres  disponibles</span></div>
					{{Form::textarea('shortDescription', '', array('placeholder'=>'Descripción corta', 'class'=>'text'))}}
					<div style="text-align: right;"><span style="color: #969696">Sin limite de caracteres</span></div>
					{{Form::textarea('descripcion', '', array('placeholder'=>'inserte su clasificado  (Solo texto)', 'class'=>'text'))}}
					{{Form::checkbox('accept_premium', 'accept', false, array('id' => 'accept_premium'))}}
					{{Form::label('accept_premium', 'Acepto que quiero publicar esto en la plataforma')}}
					{{Form::submit('PUBLICAR', array('class'=>'btn-submit-classified'))}}
				{{Form::close()}}
			</div>
		</div>
	</section>
@stop