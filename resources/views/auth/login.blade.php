@extends('layout.app')
@section('page-title', 'Login')
<!-- resources/views/auth/login.blade.php -->
@section('content')
	<div class="row">
		<div class="col-lg-6 col-lg-push-3 col-sm-10 col-sm-push-1 ">
			<form method="POST" action="/auth/login">
				{!! csrf_field() !!}
				<fieldset>
					<div class="form-group form-group-label">
						<div class="row">
							<div class="col-lg-12 col-sm-8">
								<label class="floating-label" for="email">E-mail</label>
								<input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}">
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

					<div class="checkbox checkbox-adv">
						<label for="input-checkbox-1">
							<input class="access-hide" id="input-checkbox-1" name="remember" type="checkbox">Remember Me
							<span class="circle"></span><span class="circle-check"></span><span class="circle-icon icon">done</span>
						</label>
					</div>
					<hr/>
					<div class="form-group">
						<div class="col-xx-6">
							<p class="margin-top-no"><button class="btn btn-blue" type="submit">Login</button></p>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
@stop
