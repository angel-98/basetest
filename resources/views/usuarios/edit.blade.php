@extends('layout.app')

@section('page-title', $usuario->name)
@section('breadcrumb')
	<li><a href="/">Dashboard</a></li>
	<li><a href="/usuarios">usuarios</a></li>
	<li><a href="/usuarios/{{ $usuario->slug }}">{{ $usuario->name }}</a></li>
	<li><a class="active" href="#!">edit</a></li>
@stop

@section('content')
	<fildset>
		<form method="post"  action="{{ action('UserController@update', $usuario->id)}}">
			{!! csrf_field() !!}
			<input name="_method" type="hidden" value="PUT">
			<div class="form-group">

				<div class="row">
					<div class="col-md-3 col-sm-12 well" style="background-color: #D8EFEC">

						<legend>Avatar</legend>
						<hr style="border: red 1px solid"/>
						<div class="row">
							<div class="col-sm-12">
								<input id="input-file" name="avatar" type="file">
							</div>
							<div class="col-sm-12">
								<img src="/images/users/{{ $usuario->profile->avatar }}" alt=" $usuario->id"/>
							</div>
						</div>
						<legend>Información de contacto</legend>
						<hr style="border: red 1px solid"/>
						<p><small><span class="text-red">*</span> Copia las url a tus redes sociales y de desarrollo</small></p>
						<div class="row">

							<div class="col-sm-12 form-group-label">
								<label class="floating-label" for="github">Github</label>
								<input class="form-control" id="github" name="github" value="{{ $usuario->profile->github }}" type="text">
							</div>

							<div class="col-sm-12 form-group-label">
								<label class="floating-label" for="facebook">Facebook</label>
								<input class="form-control" id="facebook" name="facebook" value="{{ $usuario->profile->facebook }}" type="text">
							</div>

							<div class="col-sm-12 form-group-label">
								<label class="floating-label" for="twitter">Twitter</label>
								<input class="form-control" id="twitter" name="twitter" value="{{ $usuario->profile->twitter }}" type="text">
							</div>

							<div class="col-sm-12 form-group-label">
								<label class="floating-label" for="phone">Teléfono</label>
								<input class="form-control" id="phone" name="phone" value="{{ $usuario->profile->phone }}" type="text">
							</div>

							<div class="col-sm-12 form-group-label">
								<label class="floating-label" for="mobile">Celular</label>
								<input class="form-control" id="mobile" name="mobile" value="{{ $usuario->profile->mobile }}" type="text">
							</div>
						</div>

					</div>

					<div class="col-md-9 col-sm-12">
						<fieldset>
							<legend>Información General</legend>
							<hr style="border: red 1px solid"/>
							<div class="row">

								<div class="col-sm-12 col-md-6 form-group-label">
									<label class="floating-label" for="name">Nombre</label>
									<input class="form-control" id="name" name="name" value="{{ $usuario->name }}" type="text">
								</div>

								<div class="col-sm-12 col-md-6 form-group-label">
									<label class="floating-label" for="email">email</label>
									<input class="form-control" id="email" name="email" value="{{ $usuario->email }}" type="email">
								</div>

							</div>
							<legend>Password</legend>
							<hr style="border: red 1px solid"/>

							<div class="row">

								<div class="col-sm-12 col-md-6 form-group-label">
									<label class="floating-label" for="password">contraseña</label>
									<input class="form-control" id="password" name="password"  type="password">
								</div>

								<div class="col-sm-12 col-md-6 form-group-label">
									<label class="floating-label" for="password_confirmation">Confirmar contraseña</label>
									<input class="form-control" id="password_confirmation" name="password_confirmation"  type="password">
								</div>

							</div>
							<legend>Etiqueta y resumen personal</legend>
							<hr style="border: red 1px solid"/>
							<div class="row">
								<div class="col-sm-12 form-group-label">
									<label class="floating-label" for="label">Etiqueta de perfil</label>
									<input class="form-control" id="label" name="label" value="{{ $usuario->profile->label }}" type="text">
								</div>

								<div class="col-sm-12">
									<textarea class="" id="resume" name="label">
										{{ $usuario->profile->resume }}
									</textarea>
								</div>
							</div>
						</fieldset>
					</div>
				</div>

			</div>
		</form>
	</fildset>
@stop