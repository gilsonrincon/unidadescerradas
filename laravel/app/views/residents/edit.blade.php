@extends('layout')

@section ('content')
	<section>
		<h1 class="title">
			Editar Residente
		</h1>
			<div class="content">
				<div class="col-md-12">
					@if(Session::has('success'))
						<div class="alert alert-success">
						 	<p>{{ Session::get('success') }}</p>
						</div>  
			        @endif

					@if(Session::has('error'))
						<div class="alert alert-danger">
						    <p class="error">{{ Session::get('error') }}</p>
						</div>
				    @endif
				</div>
				{{ Form::open(array('route' => array('residentes.update', $resident->id), 'method'=>'PATCH', 'id'=>'edit-resident'), array('role'=>'form')) }}
				<div class="col-md-6">
					{{Form::text('name', $resident->name, array('class'=>'text require', 'placeholder'=>'Nombre:'))}}
					{{Form::text('lastname', $resident->lastName, array('class'=>'text require', 'placeholder'=>'Apellido:'))}}
					{{Form::text('document', $resident->document, array('class'=>'text require numeric', 'placeholder'=>'Documento:'))}}
					{{Form::text('email', $resident->email, array('class'=>'text require email', 'placeholder'=>'Correo:'))}}
				</div>
				<div class="col-md-6">
					
					{{Form::text('tel', $resident->tel, array('class'=>'text require numeric', 'placeholder'=>'Telefono:'))}}
					{{Form::text('mobile', $resident->mobile, array('class'=>'text require numeric', 'placeholder'=>'Celular:'))}}
					<select name="owner" class="text">
						<option value="0" >No es propietario</option>
						@foreach ($owners as $owner)
							<option  value="{{$owner->id}}" @if ($owner->id == $resident->ownerId)
								selected="selected"
							@endif >{{$owner->name}} {{$owner->lastName}}</option>
						@endforeach
					</select>
				</div>
				<div class="col-md-12 validation">
					<p>&nbsp;</p>
				</div>
				{{Form::submit('Guardar', array('class'=>'btn-submit', 'data-form'=>'edit-resident'))}}
				{{ Form::close() }}
		</div>
	</section>
@stop