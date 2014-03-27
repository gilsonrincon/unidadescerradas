{{ link_to('services/create', 'Nuevo') }}
<table>
	<tr>
		<th>Nombre</th>
		<th></th>
		<th></th>
	</tr>
	@foreach($services as $s)
		<tr>
			<td>{{ $s->name }}</td>
		</tr>
	@endforeach
</table>