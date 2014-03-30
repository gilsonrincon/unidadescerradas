@extends ('layout')

@section ('content')
	<section>
		<h1 class="title">CLASIFICADO INFORMACION</h1>
		<div class="content">
			<ul id="classifiedImages">
				@foreach ($classified->images as $image)
					<li><a><img src="{{ asset('classifiedImages/'.$image->image) }}" alt="Imagen"></a>
				@endforeach
				@foreach ($classified->images as $image)
					<li><a><img src="{{ asset('classifiedImages/'.$image->image) }}" alt="Imagen"></a>
				@endforeach
				@foreach ($classified->images as $image)
					<li><a><img src="{{ asset('classifiedImages/'.$image->image) }}" alt="Imagen"></a>
				@endforeach
			</ul>
			<p>{{$classified->description}}</p>
			<div class="center">
				{{link_to('todoslosclasificados', 'VOLVER  A CLASIFICADOS', array('class' => 'link-buttom'))}}
			</div>
		</div>
	</section>
@stop