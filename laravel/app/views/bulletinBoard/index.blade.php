@extends ('layout')

@section ('content')
	<section>
		<h1 class="title">
			Cartelera Informativa
		</h1>
	</section>
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
@stop