@extends ('layout')

@section ('content')
	<section>
		<h1 class="title">TODOS LOS CLASIFICADOS</h1>
		<div class="content" style="padding:40px 20px 20px 20px">
			<div id="all-classified-lists" style="border-radius: 0px; box-shadow:0 0 0 #fff;" class="col-md-12">
				<div id="no-premium-internal" class="col-md-6">
					<ul >
					@foreach ($classifiedNoPremium as $classified)
						<li><a href="/">{{ $classified->shortDescription }}</a></li>
					@endforeach
					</ul>
				</div>

				<div id="premium" class="col-md-6" style="padding-top:0px">
					<ul>
						@foreach ($classifiedPremium as $classified)
							<li class="col-md-12">
								<img src="classifiedImages/{{ $classified->image->image }}" alt="Clasificado">
								<div>{{ $classified->shortDescription }}</div>
								<a class="view-more hide-tablet" href="/">Ver más</a>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</section>
@stop