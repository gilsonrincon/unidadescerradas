{{ link_to('classified/create', 'Nuevo') }}
<table>
	<tr>
		<th>Titulo</th>
		<th></th>
		<th></th>
	</tr>
	@foreach($classified as $c)
		<tr>
			<td>{{ $c->title }} - {{ $c->premium }}</td>
			<!--<td><a href="{{ route('classified.edit', array($c->id)) }}">Editar</a></td>-->
		</tr>
	@endforeach
</table>