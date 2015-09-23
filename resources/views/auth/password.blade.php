@extends('layout.app')
@section('page-title', 'Password Reset')

@section('content')

	<form method="POST" action="/password/email">
	{!! csrf_field() !!}

		<div class="form-group form-group-label">
			<div class="row">
				<div class="col-lg-12 col-sm-8">
					<label class="floating-label" for="email">E-mail</label>
					<input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}">
				</div>
			</div>
		</div>

	<div>
		<div class="form-group">
			<div class="col-xx-6">
				<p class="margin-top-no"><button class="btn btn-blue" type="submit">Send Password Reset Link</button></p>
			</div>
		</div>
	</div>
</form>
@stop