@extends ('layout')

@section ('content')
	<section>
		<h1 class="title">
			CONTACTO
		</h1>
		<div class="content">
			<div class="col-md-12">
				<div class="contact-info">154556 1212<br><br>CALLE  256 # 4565</div>
				<div class="contact-info">154556 1212<br><br>CALLE  256 # 4565</div>
			</div>
			<div id="contact-text" class="col-md-12">
				años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, "consecteur", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, 
			</div>
			{{ Form::open() }}
				<div class="col-md-6">
					<input type="text" class="text" name="name" placeholder="Nombre:">
					<input type="text" class="text" name="mail" placeholder="Correo:">
					<input type="text" class="text" name="tel" placeholder="Telefono:">
				</div>

				<div class="col-md-6">
					<input type="text" class="text" name="city" placeholder="Ciudad:">
					<input type="text" class="text" name="" placeholder="Asunto:">
					<textarea placeholder="Mensaje:" name="msg" cols="30" rows="10" class="text"></textarea>
					<input type="submit" class="btn-submit" value="Enviar">
				</div>
			{{ Form::close() }}
		</div>
	</section>
@stop