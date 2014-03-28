@extends ('layout')

@section ('content')
<!-- En este row se coloca el banner, la cartelera informativa, etc -->
<section>
	<div class="row">
		<div id="main-home">
			<!-- Imagen de banner-->
			<div class="col-md-12">
				<img id="banner" class="col-md-12" src="assets/images/banner.png" alt="Banner">
			</div>
			<!-- Contenedor de los clasificados -->
			<div id="bulletin-board" class="col-md-6">
				<h1>Cartelera Informativa</h1>
				<ul>
					@foreach ($bulletins as $b)
						<li>
							<img class="col-md-4" src="bulletinsImages/{{ $b->image->image }}" alt="">
							
							<div class="bulletin-board col-md-8">
								<h3>{{$b->title}}:</h3>
								<p>{{$b->shortDescription}}</p>
							</div>
						</li>
					@endforeach

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
		<div id="no-premium" class="col-md-6">
			<ul >
			@foreach ($classifiedNoPremium as $classified)
				<li><a href="/">{{ $classified->shortDescription }}</a></li>
			@endforeach
			</ul>
			<a class="view-all" href="/">Ver todos</a>
		</div>

		<div id="premium" class="col-md-6">
			<ul>
				@foreach ($classifiedPremium as $classified)
					<li class="col-md-12">
						<img src="classifiedImages/{{ $classified->image->image }}" alt="Clasificado">
						<div>{{ $classified->shortDescription }}</div>
						<a class="view-more hide-tablet" href="/">Ver más</a>
					</li>
				@endforeach
			</ul>
			<a class="view-all" href="/">Ver todos</a>
		</div>
	</div>
	<a id="min-more-classified" class="view-more" href="/">Ver más</a>
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
@stop