@extends('layout.app')

@section('page-title', $usuario->name)
@section('breadcrumb')
	<li><a href="/">Dashboard</a></li>
	<li><a href="/usuarios">Usuarios</a></li>
	<li><a class="active" href="#!">{{ $usuario->name }}</a></li>
@stop
@section('content')
	<div class="row">
		<div class="col-sm-12 col-md-4">
			<div class="row">
				<div class="col-sm-12 col-md-10">
					<p class="text-center">
						<img style="margin: 0 auto;" class="img-responsive img-thumbnail text-center" src="/images/users/{{ $usuario->profile->avatar }}" alt="{{ $usuario->name }}"/>
					</p>
					@if(Auth::check())
					<p class="text-center"><a href="/usuarios/{{ $usuario->id }}/edit">editar perfil</a></p>
					@endif
					<p class="text-center">{{ $usuario->profile->label }}</p>
				</div>
				<br class="visible-print-inline-block"/>

				<div class="col-sm-12 col-md-12">
					@include('usuarios.show._a_contact-info')
				</div>

			</div>
		</div>

		<div class="col-sm-12 col-md-8">
			<div class="row">
				<h4 class="margin-top-no">Sobre mi</h4>
				{!! $usuario->profile->resume !!}
			</div>

			<div class="row">
				@include('usuarios.show._b_charts-area')
			</div>
		</div>
	</div>

@stop

@section('post-script')
	<script src="/js/user.js"></script>
@stop