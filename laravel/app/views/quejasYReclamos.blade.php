@extends ('layout')

@section ('scripts')
	<script>
		$(document).on('ready', function(){
			
		})
	</script>
@stop

@section ('content')
	<section>
		<h1 class="title">QUEJAS Y RECLAMOS</h1>
		<div class="content">
			<p>Si tienes alguna queja o algun reclamo no dude en contactar a continuacion ensontraras un formulario en el cual podras hacernos saber tu debida inquietud</p>

			@if(Session::has('error'))
		       <p class="error">{{ Session::get('error') }}</p>
		    @endif

			@if(Session::has('success'))
		      <p class="success">{{ Session::get('success') }}</p>
		    @endif

			{{Form::open(array('url' => 'quejasyreclamos/reclamar', 'method'=>'POST'))}}
			<div class="col-md-6">
				{{Form::text('name', '', array('class'=>'text', 'placeholder'=>'Nombre:'))}}
				{{Form::text('tel', '', array('class'=>'text', 'placeholder'=>'Telefono:'))}}
				{{Form::text('title', '', array('class'=>'text', 'placeholder'=>'Asunto:'))}}
			</div>
			<div class="col-md-6">
				{{Form::textarea('description', '', array('class'=>'text', 'placeholder'=>'mensaje: (Dirijido a la Administracion)', 'style'=>'height:125px'))}}
				{{Form::submit('Enviar', array('class'=>'btn-submit'))}}
			</div>
			{{Form::close()}}
		</div>
	</section>
@stop
