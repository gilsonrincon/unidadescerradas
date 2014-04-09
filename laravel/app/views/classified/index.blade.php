@extends ('layout')

@section ('content')
<section>
	<h1 class="title">
		Lista de clasificados
	</h1>
	<div class="content">
		{{ link_to('classified/create', 'Nuevo Clasificado', array('class'=>'btn btn-primary')) }}
		<br><br>
		<table class="table table-striped">
			<tr>
				<th>Titulo</th>
				<th>Tipo de clasificado</th>
				<th></th>
			</tr>
			@foreach($classified as $c)
				<tr>
					<td>{{ $c->title }}</td>
					<td>
						@if($c->premium == 1)
							Premium
						@else 
							No es Premium
						@endif
					</td>
					<td>
						
					</td>
				</tr>
			@endforeach
		</table>
	</div>
</section>
@stop