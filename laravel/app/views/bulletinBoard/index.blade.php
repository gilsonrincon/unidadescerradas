{{ link_to('bulletins/create', 'Nuevo') }}
<table>
	<tr>
		<th>Titulo</th>
		<th></th>
		<th></th>
	</tr>
	@foreach($bulletins as $b)
		<tr>
			<td>{{ $b->title }} </td>
		</tr>
	@endforeach
</table>