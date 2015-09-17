@extends('layout.app')
@section('page-title', 'Register User')

@section('content')

	<div class="row">
		<div class="col-lg-6 col-lg-push-3 col-sm-10 col-sm-push-1 ">
			<!-- resources/views/auth/register.blade.php -->
			<form method="POST" action="/auth/register">
				{!! csrf_field() !!}
				<fieldset>
					<legend>Registrar</legend>

					<div class="form-group form-group-label">
						<div class="row">
							<div class="col-lg-12 col-sm-8">
								<label class="floating-label" for="name">Nombre</label>
								<input class="form-control" id="name" type="text" name="name">
							</div>
						</div>
					</div>


					<div class="form-group form-group-label">
						<div class="row">
							<div class="col-lg-12 col-sm-8">
								<label class="floating-label" for="email">E-mail</label>
								<input class="form-control" id="email" type="email" name="email">
							</div>
						</div>
					</div>

					<div class="form-group form-group-label">
						<div class="row">
							<div class="col-lg-12 col-sm-8">
								<label class="floating-label" for="password">Password</label>
								<input class="form-control" id="password" type="password" name="password" >
							</div>
						</div>
					</div>

					<div class="form-group form-group-label">
						<div class="row">
							<div class="col-lg-12 col-sm-8">
								<label class="floating-label" for="password">Password de confirmación</label>
								<input class="form-control" id="password" type="password" name="password_confirmation" >
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xx-6">
							<p class="margin-top-no"><button class="btn btn-blue" type="submit">Registrar</button></p>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
@stop