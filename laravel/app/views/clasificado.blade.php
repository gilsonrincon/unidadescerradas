@extends ('layout')

@section ('scripts')
	<script>
		$(document).on('ready', function(){
			//Mostrar contenido oculto, en este caso se usa para mostrar imagenes
			$('#classifiedImages li a').click(function(event) {
				if($(window).width() > 980){
					$(this).next().fadeIn(500);
					event.preventDefault();
				}
			});

			//Ocultamos el contenido
			$('.hide-container').click(function(event) {
				$('.hide-container').fadeOut(500);
			});
		})
	</script>
@stop

@section ('content')
	<section>
		<h1 class="title">CLASIFICADO INFORMACION</h1>
		<div class="content">
			<ul id="classifiedImages">
				@foreach ($classified->images as $image)
					<li>
					<a href="{{ asset('classifiedImages/'.$image->image) }}" target="_blank">
						<img src="{{ asset('classifiedImages/'.$image->image) }}" alt="Imagen">
					</a>
					<div class="hide-container">
						<div class="hide-content">
							<img src="{{ asset('classifiedImages/'.$image->image) }}" alt="Imagen">
						</div>
					</div>
				@endforeach
			</ul>
			<p>{{$classified->description}}</p>
			<div class="center">
				{{link_to('todoslosclasificados', 'VOLVER  A CLASIFICADOS', array('class' => 'link-buttom'))}}
			</div>
		</div>
	</section>
@stop