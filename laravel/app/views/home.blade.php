<!doctype html>
<html lang="en">
	<head>
		<title>Unidades Cerradas</title>

		<!-- Enlaces a la hojas de estilo -->
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/main.css">
	</head>
	<body>
		<!-- Contenedor para poder usar bootstrap -->
		<div class="container">
			<!-- primera row para el header -->
			<div class="row">
				<header>
					<!--Imagen del logotipo-->
					<img id="logo" src="assets/images/logo.png" alt="logo">
					
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
						<div id="btns-access" class="col-md-2">
							<a id="btn-login" href="/">Ingresar</a><span style="color:">|</span>
							<a id="btn-signin" href="/">Registrarse</a>
							<a id="btn-publish" href="/">Publique su clasificado</a>
						</div>
					</nav>
				</header>
			</div>
			
			<!-- En este row se coloca el banner, la cartelera informativa, etc -->
			<section>
				<div class="row">
					<div id="main-home">
						<!-- Imagen de banner-->
						<div class="col-md-12">
							<img src="assets/images/banner.png" alt="Banner">
						</div>
						<!-- Contenedor de los clasificados -->
						<div id="classified" class="col-md-6">
							<h1>Cartelera Informativa</h1>
							<ul>
								<li>
									<img class="col-md-4" src="assets/images/classifiedMin.png" alt="Clasificado">
									<div class="classified col-md-8">
										<h3>Informe:</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
										Eveniet consequuntur omnis in esse veritatis id pariatur. 
										Doloribu.</p>
									</div>
								</li>

								<li>
									<img class="col-md-4" src="assets/images/classifiedMin.png" alt="Clasificado">
									<div class="classified col-md-8">
										<h3>Informe:</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
										Eveniet consequuntur omnis in esse veritatis id pariatur. 
										Doloribus</p>
									</div>
								</li>

								<li>
									<img class="col-md-4" src="assets/images/classifiedMin.png" alt="Clasificado">
									<div class="classified col-md-8">
										<h3>Informe:</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
										Eveniet consequuntur omnis in esse veritatis id pariatur. 
										Doloribus</p>
									</div>
								</li>
								<a class="view-more" href="/">Ver más</a>
							</ul>

						</div>
						<!--Contenedor de unidad cerrada-->
						<div id="closed-unit" class="col-md-6">
							<!--Titulo-->
							<h1>Unidad cerrada</h1>
							<!--Texto-->
							<p>años de antiguedad. Richard McClintock, un profesor de Latin de la 
							Universidad de Hampden-Sydney en Virginia, encontró una de las palabras 
							más oscuras de la lengua del latín, "consecteur", en un pasaje de Lorem 
							Ipsum, y al seguir leyendo distintos textos del latín, </p>
							<!--Lista con enlaces a otras secciones y descripciones de estos-->
							<ul>
								<li>
									<p class="col-md-5">Puedes pagar la administracion a travez de este portal</p>
									<a id="btn-admin" class="col-md-7" href="/">PAGAR ADMINISTRACION</a>
								</li>

								<li>
									<p class="col-md-5">si tienes alguna queja o algun reclamo haznoslo saber</p>
									<a id="btn-complaints" class="col-md-7" href="/">QUEJAS Y RECLAMOS</a>
								</li>

								<li>
									<p class="col-md-5">si tienes alguna informacion para publicar en este portal</p>
									<a id="btn-publish-classified" class="col-md-7" href="/">PUBLIQUE SU CLASIFICADO</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div id="all-classified" class="col-md-12">
					<h1>Clasificados de interes para todos</h1>
				</div>
				<div id="all-classified-lists" class="col-md-12">
					<div class="col-md-6">
						<ul id="no-premium">
							<li><a href="/">VENDO APARATAMENTO CASA 201 LLAMAR 315 689 9565</a></li>
							<li><a href="/">VENDO APARATAMENTO CASA 201 LLAMAR 315 689 9565</a></li>
							<li><a href="/">VENDO APARATAMENTO CASA 201 LLAMAR 315 689 9565</a></li>
							<li><a href="/">VENDO APARATAMENTO CASA 201 LLAMAR 315 689 9565</a></li>
							<li><a href="/">VENDO APARATAMENTO CASA 201 LLAMAR 315 689 9565</a></li>
						</ul>
					</div>

					<div class="col-md-6">
						<ul id="premium">
							<li>
								<img class="col-md-4" src="assets/images/classifiedMin.png" alt="Clasificado">
								Vendo moto AKT  en buen esta modelo 2013
								con 2 cascos papeles al dia....<br>
								<a class="view-more" href="/">Ver más</a>
							</li>

							<li>
								<img class="col-md-4" src="assets/images/classifiedMin.png" alt="Clasificado">
								Vendo moto AKT  en buen esta modelo 2013
								con 2 cascos papeles al dia....<br>
								<a class="view-more" href="/">Ver más</a>
							</li>

							<li>
								<img class="col-md-4" src="assets/images/classifiedMin.png" alt="Clasificado">
								Vendo moto AKT  en buen esta modelo 2013
								con 2 cascos papeles al dia....<br>
								
							</li>
						</ul>
					</div>
					<div class="col-md-12" style="text-align:center">
						<a class="col-md-6" href="/">Ver todos</a>
						<a class="col-md-6" href="/">Ver todos</a>
					</div>
				</div>
			</section>
			<section>
				<ul id="sub-menu" class="col-md-12">
					<li><a href="/">Información de la unidad</a></li>
					<li><a href="/">Paga tu administración</a></li>
					<li><a href="/">Documentos</a></li>
					<li><a href="/">Reglamento  y convivencia </a></li>
					<li style="border-right:none"><a href="/">Presupuesto del año</a></li>
				</ul>
			</section>

			<section>
				<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
				
				<div id="map-container" class="col-md-12" >
					<div id="map" class="col-md-12" style="height: 229px"></div>
				</div>

				<script>
					var mapa = new google.maps.LatLng(6.1963627, -75.5585778);	//Coordenadas
					var opciones = {
					    zoom : 17,
					    center: mapa,
					    mapTypeId: google.maps.MapTypeId.ROADMAP
					};
					var div = document.getElementById('map');
					var map = new google.maps.Map(div, opciones);

					// Creamos un marcador y lo posicionamos en el mapa
					var marcador = new google.maps.Marker({
					  position: new google.maps.LatLng(6.1963627, -75.5585778), //Coordenadas
					  map: map,
					  icon: "http://creacioninmobiliaria.com/img/maps.png"
					});
				</script>


			</section>
			<div id="foot-bt" class="col-md-12">
				años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad 
				de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la 
				lengua del latín, "consecteur", en un pasaje de Lorem Ipsum, y al seguir leyendo 
				distintos textos del latín, 
			</div>
		</div>

		<footer>
			<div class="container">
				<div class="col-md-4">
					en este sitio web podras encontrar informacion de la unidad correrspondiente
					puedes encontrar , noticias , reglamento, consultas, y acontecimientos importantes
					tambien puedes pagar la administracion por este portal. 
				</div>

				<div id="foot-mid" class="col-md-4">
					<a href="http://swm.com.co" target="_blank">
						Todos los derechos reservados  StudioWeb & Marketing
					</a>
				</div>

				<div class="col-md-4">
					en este sitio web podras encontrar informacion de la unidad correrspondiente
					puedes encontrar , noticias , reglamento, consultas, y acontecimientos importantes
					tambien puedes pagar la administracion por este portal. 
				</div>
			</div>
		</footer>
	</body>
</html>
