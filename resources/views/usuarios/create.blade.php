@extends('layout.app')

@section('page-title', "Creación manual de usuarios")
@section('breadcrumb')
	<li><a href="/">Dashboard</a></li>
	<li><a href="/usuarios">usuarios</a></li>
	<li><a href="#!">Creación manual de usuarios</a></li>
@stop

@section('content')
	<fildset>
		<form method="post"  action="{{ action('UserController@store')}}" enctype="multipart/form-data">
			{!! csrf_field() !!}

			<div class="form-group">

				<div class="row">

					<div class="col-md-3 col-sm-12">
						@include('usuarios.create._contact-info')
					</div>

					<div class="col-md-9 col-sm-12">
						<fieldset>
							@include('usuarios.create._gereral-info-and-pass')
							<br/>
							@include('usuarios.create._personal-resume')
						</fieldset>
					</div>

				</div>

			</div>
			<div class="row">
				<hr />
				<div class="row">
					<p class="text-left">
						<button type="submit"  class="btn btn-blue">Crear usuario</button>
						<a class="btn btn-flat btn-alt" href="/roles">Cancel</a>
					</p>
				</div>
			</div>
		</form>
	</fildset>
@stop
@section('post-script')
	<script src="/js/user-edit.js"></script>
@stop