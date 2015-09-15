@extends('layout.app')

@section('page-title', $usuario->name)
@section('breadcrumb')
	<li><a href="/">Dashboard</a></li>
	<li><a href="/usuarios">Usuarios</a></li>
	<li><a class="active" href="#!">{{ $usuario->name }}</a></li>
@stop
@section('content')
	<div class="row">
		<div class="col-sm-3">
			<div class="row">
				<div class="col-sm-12">
					<p class="text-center">
						<img style="margin: 0 auto;" class="img-responsive img-thumbnail text-center" src="/images/users/{{ $usuario->profile->avatar }}" alt="{{ $usuario->name }}"/>
					</p>
					<p class="text-center"><a href="/usuarios/{{ $usuario->slug }}/edit">editar perfil</a></p>
					<p class="text-center">{{ $usuario->profile->label }}</p>
				</div>

				<div class="col-sm-12">

					<div class="table-responsive">

						<table class="table">
							<tbody>
							<tr>
								<td>
									<label><span class="text-blue">e-mail: </span></label> {{ $usuario->email }}
								</td>
							</tr>

							@if($usuario->profile->github != null)
								<tr>
									<td>
										<label><span class="text-blue">Github: </span></label> {{ $usuario->profile->github }}
									</td>
								</tr>
							@endif

							@if($usuario->profile->facebook != null)
								<tr>
									<td>
										<label><span class="text-blue">facebook: </span></label> {{ $usuario->profile->facebook }}
									</td>
								</tr>
							@endif

							@if($usuario->profile->twitter != null)
								<tr>
									<td>
										<label><span class="text-blue">twitter: </span></label> {{ $usuario->profile->twitter }}
									</td>
								</tr>
							@endif

							@if($usuario->profile->phone != null)
								<tr>
									<td>
										<label><span class="text-blue">Teléfono: </span></label> {{ $usuario->profile->phone }}
									</td>
								</tr>
							@endif

							@if($usuario->profile->mobile != null)
								<tr>
									<td>
										<label><span class="text-blue">Celular: </span></label> {{ $usuario->profile->mobile }}
									</td>
								</tr>
							@endif
							</tbody>

						</table>

					</div>
				</div>

			</div>
		</div>
		<div class="col-md-9">
			<h4 class="margin-top-no">Acerca de mi</h4>
			{!! $usuario->profile->resume !!}
		</div>
	</div>
@stop