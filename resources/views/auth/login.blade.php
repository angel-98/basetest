@extends('layout.app')
@section('page-title', 'Login')
@section('v-control', 'id="login"')
<!-- resources/views/auth/login.blade.php -->
@section('content')
	<div class="row">
		<div class="col-lg-4 col-lg-push-4 col-sm-6 col-sm-push-3">
			<section class="content-inner">
				<div class="card-wrap">
					<div class="card">
						<div class="card-main">
							<div class="card-header">
								<div class="card-inner">
									<h1 class="card-heading">Login</h1>
								</div>
							</div>
							<div class="card-inner">
								<p class="text-center">
												<span class="avatar avatar-inline avatar-lg">
													<img alt="Login" src="../images/users/avatar-001.jpg" v-if="exist === false">
													<img alt="Login" src="../images/users/@{{ rows.profile }}" v-if="exist === !false">
												</span>
								</p>
								<form method="POST" action="/auth/login">
									{!! csrf_field() !!}
									<div class="form-group form-group-label">
										<div class="row">
											<div class="col-md-10 col-md-push-1">
												<label class="floating-label" for="email">E-mail</label>
												<input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" v-model="email" v-on="keyup : searchEmail">
											</div>
										</div>
									</div>
									<div class="form-group form-group-label">
										<div class="row">
											<div class="col-md-10 col-md-push-1">
												<label class="floating-label" for="login-password">Password</label>
												<input class="form-control" id="password" type="password" name="password" v-model="pass" v-attr="disabled: exist === false">
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-md-10 col-md-push-1">
												<button class="btn btn-block waves-attach waves-button" v-attr="disabled: ! pass">Login</button>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-10 col-md-push-1">
												<div class="checkbox checkbox-adv">
													<label for="input-checkbox-1">
														<input class="access-hide" id="input-checkbox-1" name="remember" type="checkbox">Recordarme
														<span class="circle"></span><span class="circle-check"></span><span class="circle-icon icon">done</span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix">
					<p class="margin-no-top pull-left"><a class="btn btn-flat btn-blue waves-attach" href="/help">¿Necesita ayuda?</a></p>
					<p class="margin-no-top pull-right"><a class="btn btn-flat btn-blue waves-attach" href="/auth/register">Crear Cuenta</a></p>
				</div>
			</section>
		</div>
	</div>
	@include('partials._vue-data')
@stop

@section('post-script')
	<script src="/js/vue-login.js"></script>
@stop