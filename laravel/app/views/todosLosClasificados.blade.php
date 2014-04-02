@extends ('layout')

@section ('scripts')
	<script>
		$(document).on('ready', function(){
			$('#premium ul div').first().css('display', 'block')
			$('#no-premium-internal ul div').first().css('display', 'block')
			$('#premium .pagination a').first().addClass('active')
			$('#no-premium-internal .pagination a').first().addClass('active')

			$('#premium .pagination a').click(function(event) {
				$("#premium .pagination a.active").removeClass('active')
				$(this).addClass('active')
				$page = $(this).data('pagination')
				$("#premium ul div").css('display', 'none')
				$("#premium ul div#premium-"+$page).css('display', 'block')
			});

			$('#no-premium-internal .pagination a').click(function(event) {
				$("#no-premium-internal .pagination a.active").removeClass('active')
				$(this).addClass('active')
				$page = $(this).data('pagination')
				$("#no-premium-internal ul div").css('display', 'none')
				$("#no-premium-internal ul div#no-premium-internal-"+$page).css('display', 'block')
			});
		})
	</script>
@stop

@section ('content')
	<section>
		<h1 class="title">TODOS LOS CLASIFICADOS</h1>
		<div class="content" style="padding:40px 20px 20px 20px">
			<div id="all-classified-lists" style="border-radius: 0px; box-shadow:0 0 0 #fff;" class="col-md-12">
				<div id="no-premium-internal" class="col-md-6">
					<ul>
						<?php
							$rep = 0;
							$pagination = 1;
						?>
						@foreach ($classifiedNoPremium as $classified)
								<?php $rep = $rep + 1; ?>
								@if ($rep == 1)
									<div id="no-premium-internal-{{$pagination}}">
								@elseif ($rep == 11)
									<?php 
										$rep = 1;
										$pagination = $pagination + 1;
									?>
									</div>
									<div id="no-premium-internal-{{$pagination}}">
								@endif
							<li><a href="/">{{ $classified->shortDescription }}</a></li>
						@endforeach
					</ul>
					@if ($pagination > 1)
						<div class="pagination">
							@for ($i = 1; $i <= $pagination ; $i++)
								<a data-pagination="{{$i}}">{{$i}}</a>
							@endfor
						</div>
					@endif
				</div>

				<div id="premium" class="col-md-6" style="padding-top:0px">
					<ul>
						<?php
							$rep = 0;
							$pagination = 1;
						?>
						@foreach ($classifiedPremium as $classified)
							<?php $rep = $rep + 1; ?>
							@if ($rep == 1)
								<div id="premium-{{$pagination}}">
							@elseif ($rep == 7)
								<?php 
									$rep = 1;
									$pagination = $pagination + 1;
								?>
								</div>
								<div id="premium-{{$pagination}}">
							@endif
							<li class="col-md-12">
								@foreach ($classified->images as $image)
									<img src="{{asset('classifiedImages/'.$image->image)}}" alt="Clasificado">
								@endforeach
								<div>{{ $classified->shortDescription }}</div>
								<a class="view-more hide-tablet" href="/">Ver más</a>
							</li>
						@endforeach
					</ul>
					@if ($pagination > 1)
						<div class="pagination">
							@for ($i = 1; $i <= $pagination ; $i++)
								<a data-pagination="{{$i}}">{{$i}}</a>
							@endfor
						</div>
					@endif
				</div>
			</div>
		</div>
	</section>
@stop