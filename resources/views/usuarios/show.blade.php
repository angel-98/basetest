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
					<p class="text-center"><a href="/usuarios/{{ $usuario->slug }}/edit">editar perfil</a></p>
					@endif
					<p class="text-center">{{ $usuario->profile->label }}</p>
				</div>
					<br class="visible-print-inline-block"/>
				<div class="col-sm-12 col-md-12">

					<div class="table-responsive">

						<table class="table">
							<tbody>
							<tr class="visible-print-inline-block">
								<td>
									<label  style="display: block"><span class="text-blue">Nombre: </span></label> {{ $usuario->name }}
								</td>
							</tr>
							<tr>
								<td>
									<label  style="display: block"><span class="text-blue">e-mail: </span></label> {{ $usuario->email }}
								</td>
							</tr>

							@if($usuario->profile->github != null)
								<tr>
									<td>
										<label style="display: block"><span class="text-blue">Github: </span></label>
										<a target="_blank" href="{{ $usuario->profile->github }}">{{ $usuario->profile->github }}</a>
									</td>
								</tr>
							@endif

							@if($usuario->profile->facebook != null)
								<tr>
									<td>
										<label  style="display: block"><span class="text-blue">facebook: </span></label>
										<a target="_blank" href="{{ $usuario->profile->facebook }}">{{ $usuario->profile->facebook }}</a>
									</td>
								</tr>
							@endif

							@if($usuario->profile->twitter != null)
								<tr>
									<td>
										<label  style="display: block"><span class="text-blue">twitter: </span></label>
										<a target="_blank" href="https://twitter.com/gbelot2003">{{ $usuario->profile->twitter }}</a>
									</td>
								</tr>
							@endif

							<tr>
								<td>
									<label  style="display: block"><span class="text-blue">Drupal Association: </span></label>
									<a target="_blank" href="https://www.drupal.org/u/gbelot2003">drupal.org/u/gbelot2003</a>
								</td>
							</tr>

							@if($usuario->profile->phone != null)
								<tr>
									<td>
										<label  style="display: block"><span class="text-blue">Teléfono: </span></label> {{ $usuario->profile->phone }}
									</td>
								</tr>
							@endif

							@if($usuario->profile->mobile != null)
								<tr>
									<td>
										<label  style="display: block"><span class="text-blue">Celular: </span></label> {{ $usuario->profile->mobile }}
									</td>
								</tr>
							@endif
							</tbody>

						</table>

					</div>
				</div>

			</div>
		</div>

		<div class="col-sm-12 col-md-8">
			<div class="row">
				<h4 class="margin-top-no">Sobre mi</h4>
				{!! $usuario->profile->resume !!}
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div id="chartdiv"></div>
				</div>

				<div class="col-sm-12">
					<div id="chartdiv2"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h4 class="margin-top-no">Trabajos recientes</h4>
			<p>Sistema de registro de casos (para litigios en el sistema legal Hondureño)</p>
			<p>El proyecto Trackhn, completo sistema de registro de movimientos de entregas de paqueteria intregral</p>
			<p>Cuento entre mis trabajos recientes, la creación del portal honduras.travel en conjunto con Honduras Trip para USAID/Proparque</p>
		</div>
	</div>
@stop

@section('post-script')
	<script src="/js/user.js"></script>
@stop