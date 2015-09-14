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
						@include('usuarios.edit._contact-info')
					</div>

					<div class="col-md-9 col-sm-12">
						<fieldset>
							<legend>Información General</legend>
							@include('usuarios.edit._gereral-info-and-pass')
							<legend>Etiqueta y resumen personal</legend>
							<hr style="border: red 1px solid"/>
							@include('usuarios.edit._personal-resume')
						</fieldset>
					</div>

				</div>

			</div>
		</form>
	</fildset>
@stop
@section('post-script')
	<script src="/js/user-edit.js"></script>
@stop