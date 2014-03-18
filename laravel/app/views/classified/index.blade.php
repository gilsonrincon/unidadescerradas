{{ link_to('classified/create', 'Nuevo') }}
<ul>
@foreach($classified as $c)
	<li>{{ $c->title }}</li>
@endforeach
</ul>