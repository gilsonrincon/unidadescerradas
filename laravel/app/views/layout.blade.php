<!doctype html>
<html lang="en">
	<head>
		<title>Unidades Cerradas</title>
		<!-- Enlaces a la hojas de estilo -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/js/jquery.datetimepicker.css')}}"/>

		<!-- Enlaces para el javascript -->
		<script src="{{asset('assets/js/jquery.js')}}"></script>
		<script src="{{asset('assets/js/jquery.datetimepicker.js')}}"></script>
		<script>
			$(document).on('ready', function(){
				if($(window).width() <= 980){
					$("#bulleing-board").appendTo('#main-home')
					$("#no-premium").appendTo('#all-classified-lists')
					$("#no-premium-internal").appendTo('#all-classified-lists')
					$("#calendar").appendTo('#reservations-container')
					$("#reservations-form").appendTo('#reservations-container')
				}
				$(window).resize(function(event) {
					if($(window).width() <= 980){
						$("#bulleing-board").appendTo('#main-home')
						$("#no-premium").appendTo('#all-classified-lists')
						$("#no-premium-internal").appendTo('#all-classified-lists')
						$("#calendar").appendTo('#reservations-container')
						$("#reservations-form").appendTo('#reservations-container')
					} else {
						$("#closed-unit").appendTo('#main-home')
						$("#premium").appendTo('#all-classified-lists')
						$("#hide-menu").slideUp(20)
						$("#calendar").appendTo('#reservations-container')
						$("#reservations-text").appendTo('#reservations-container')
						$("#reservations-form").appendTo('#reservations-container')
					}
				});

				$("#display-menu").click(function(event) {
					/*Mostramos el menu desplegable*/
					$("#hide-menu").slideToggle(500);
				});
			})
		</script>
		@yield('scripts')
	</head>
	<body>
		<!-- Contenedor para poder usar bootstrap -->
		<div class="container">
			<!-- primera row para el header -->
			<div class="row">
				<header>
					<!--Imagen del logotipo-->
					<img id="logo" src="{{asset('assets/images/logo.png')}}" alt="logo">
					
					<!--Menu principal, tiene un ancho total de 12-->
					<nav id="main-menu" class="col-md-12">
						<!--Lista que compone el menu principal, tiene un ancho de 10-->
						<ul class="col-md-10">
							<li class="first-item"><a href="/">Inicio</a></li>
							<li>
								<a href="/">Clasificados</a>
								<ul>
									<li><a href="/">Cartelera Informativa</a></li>
									<li><a href="/">Todos los Clasificados</a></li>
									<li><a href="/">Publicar Clasificado</a></li>
								</ul>
							</li>
							<li><a href="/">Pagar Administración</a></li>
							<li>
								<a href="/">Información</a>
								<ul>
									<li><a href="/">Inf. Unidad Cerrada</a></li>
									<li><a href="/">Documentos</a></li>
								</ul>
							</li>
							<li>
								<a href="/">Eventos</a>
								<ul>
									<li><a href="/">Calendario de Eventos</a></li>
									<li><a href="/">Reserva de servicios</a></li>
								</ul>

							</li>
							<li><a href="/">Quejas</a></li>
							<li><a href="/">Contacto</a></li>
						</ul>

						<!-- Enlaces de acceso y para publicar un clasificado -->
						<div id="btns-access">
							<a id="btn-login" href="/">Ingresar</a><span style="color:">|</span>
							<a id="btn-signin" href="/">Registrarse</a>
							<a id="btn-publish" href="/">Publique su clasificado</a>
						</div>
					</nav>

					<!--Menu auxiliar para resoluciones menores de 980px-->
					<nav id="auxiliary">
						<a id="display-menu">
							<img src="{{asset('assets/images/btnDisplayMenu.png')}}" alt="Menu">
						</a>
						<a id="btn-login-auxiliary" href="/">Ingresar</a>
						<a id="btn-publish-auxiliary" href="/">Publique su clasificado</a>
					</nav>
					<nav>
						<ul id="hide-menu">
							<li><a href="/">Inicio</a></li>
							<li><a href="/">Clasificados</a></li>
							<li><a href="/">Pagar administración</a></li>
							<li><a href="/">Información</a></li>
							<li><a href="/">Eventos</a></li>
							<li><a href="/">Quejas</a></li>
							<li><a href="/">Contacto</a></li>
						</ul>
					</nav>
				</header>
			</div>
			@yield('content')
		</div>
		<section>
			<div class="container">
				<div id="foot-bt" class="col-md-12">
					años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad 
					de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la 
					lengua del latín, "consecteur", en un pasaje de Lorem Ipsum, y al seguir leyendo 
					distintos textos del latín, 
				</div>
			</div>
		</section>

		<footer>
			<div class="container">
				<div class="col-md-4 text-foot">
					en este sitio web podras encontrar informacion de la unidad correrspondiente
					puedes encontrar , noticias , reglamento, consultas, y acontecimientos importantes
					tambien puedes pagar la administracion por este portal. 
				</div>

				<div id="foot-mid" class="col-md-4">
					<a href="http://swm.com.co" target="_blank">
						Todos los derechos reservados  StudioWeb & Marketing
					</a>
				</div>

				<div class="col-md-4 text-foot">
					en este sitio web podras encontrar informacion de la unidad correrspondiente
					puedes encontrar , noticias , reglamento, consultas, y acontecimientos importantes
					tambien puedes pagar la administracion por este portal. 
				</div>
			</div>
		</footer>
	</body>
</html>
