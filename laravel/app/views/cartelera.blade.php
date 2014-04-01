@extends ('layout')


@section ('content')
	<section>
		<h1 class="title">INFORMACION DE LA CARTELERA</h1>
		<div class="content" style="padding:4% 40px 30px 20px">
			<div class="bulletin">
				<div class="col-md-4">
					<img style="width: 100%" src="{{asset('bulletinsImages/'.$bulletin->image->image)}}" alt="">
				</div>
				<div class="col-md-8">
					<h1 class="sub-title">{{$bulletin->title}}:</h1>
					{{$bulletin->description}}
				</div>
			</div>
			{{link_to('todoslosdecartelera', 'VOLVER  A CARTELERA', array('id' => 'to-bulletinboard', 'class' => 'link-buttom'))}}
		</div>
	</section>
@stop