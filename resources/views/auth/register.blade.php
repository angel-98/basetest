@extends('layout.app')
@section('page-title', 'Register User')

@section('content')

	<div class="row">
		<div class="col-lg-6 col-lg-push-3 col-sm-10 col-sm-push-1 ">
			<!-- resources/views/auth/register.blade.php -->

			<form method="POST" action="/auth/register">
				{!! csrf_field() !!}

				<div>
					Name
					<input type="text" name="name" value="{{ old('name') }}">
				</div>

				<div>
					Email
					<input type="email" name="email" value="{{ old('email') }}">
				</div>

				<div>
					Password
					<input type="password" name="password">
				</div>

				<div>
					Confirm Password
					<input type="password" name="password_confirmation">
				</div>

				<div>
					<button type="submit">Register</button>
				</div>
			</form>
		</div>
	</div>
@stop