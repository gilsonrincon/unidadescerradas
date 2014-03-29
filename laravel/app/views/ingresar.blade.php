@extends ('layout')

@section ('content')
	<section>
		<h1 class="title">
			LOGIN INGRESAR
		</h1>
		<div id="login">
			<p>años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, "consecteur", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, </p>
			<div id="login-form">
				@if(Session::has('error'))
		            <p class="error">{{ Session::get('error') }}</p>
		        @endif

				{{Form::open(array('url'=>'/ingresar'))}}
					<label id="email-label" for="email">
						{{ Form::input('text', 'email', Input::old('email'), array('placeholder'=>'CORREO:', 'class'=> 'text')) }}
					</label>

					<label id="pass-label" for="password">
						{{ Form::input('password', 'password', '', array('placeholder'=>'CONTRASEÑA:', 'class'=> 'text')) }}
					</label>

					<div id="btn-login-container">
						<label id="remember-mobile" class="normal-hide">
							<input type="checkbox" name="remember">
							<a>Recordarme</a>
						</label>
						<input class="btn-submit" type="submit" Value="ENTRAR" style="right:0px;">
					</div>

					<div>
						<label>
							<input type="checkbox" name="remember">
							<a>Recordarme</a>
						</label>
						<a href="/">Olvide mi contraseña</a>
						<a href="/">soy nuevo Quiero registrarme</a>
					</div>
				{{ Form::close() }}
			</div>
		</div>
	</section>
@stop