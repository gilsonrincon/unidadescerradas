@extends ('layout')

@section ('content')
	<section>
		<h1 class="title">INFORMACION DE LA CARTELERA</h1>
		<div id="bulletin-board" class="content" style="padding:30px 30px 20px 30px">
			<ul style="padding:0px; box-shadow:0px 0px 0px #fff;">
				@foreach ($bulletins as $b)
					<li class="col-md-6" style="border: none">
						<img class="col-md-4" src="bulletinsImages/{{ $b->image->image }}" alt="">
						<div class="bulletin-board col-md-6">
							<h3>{{$b->title}}:</h3>
							<p>{{$b->shortDescription}}</p>
						</div>
					</li>
				@endforeach
			</ul>
		</div>
	</section>
@stop