@extends('layout.app')

@section('page-title', 'Administración de Usuarios')

@section('v-control', 'id="usuarios"')

@section('breadcrumb')
	<li><a href="/">Dashboard</a></li>
	<li><a class="active" href="/usuarios">usuarios</a></li>
@stop

@section('content')

	<div class="row">
		<div class="col-md-1 col-md-offset-11 col-sm-12 text-left">
			<a class="fbtn fbtn-alt left" data-toggle="modal" title="Nuevo usuario" href="#modal-create"><span class="icon">add</span></a>
		</div>
	</div>

	<div class="row">

		<div class="col-sm-12">

			<div class="title-wrap">

				<div class="tile" v-repeat="row:rows">

					<div class="pull-left tile-side">
						<div class="avatar avatar-sm"  v-class="
							 avatar-blue : row.estado != false,
							 avatar-red : row.estado != true
						">
							<span class="icon">@{{ estadoTrans(row.estado) }}</span>
						</div>
					</div>

					<div class="tile-action tile-action-show">

						<ul class="nav nav-list pull-right">

							<li class="dropdown">

								<a class="dropdown-toggle waves-attach waves-effect" data-toggle="dropdown"><span class="icon">settings</span></a>

								<ul class="dropdown-menu">
									<li>
										<a class="waves-attach waves-effect" href="/usuarios/@{{ row.slug }}"><span class="icon margin-right-sm">face</span>Perfil</a>
									</li>

									<li>
										<a class="waves-attach waves-effect" href="javascript:void(0)" v-on="click: setUser(row)"><span class="icon margin-right-sm">shuffle</span>Roles</a>
									</li>

									<li>
										<a class="waves-attach waves-effect " href="javascript:void(0)" v-on="click: setUserStatus(row)">
											<span class="icon margin-right-sm"
										                                                                      v-class="
																												text-blue: row.estado != false,
																												text-red: row.estado != true
																												">
											replay</span>@{{ userStatusEval(row) }}
										</a>
									</li>

									<li>
										<a class="waves-attach waves-effect" href="javascript:void(0)" v-on="click: setUserDelete(row)"><span class="icon margin-right-sm">delete</span>Eliminar</a>
									</li>
								</ul>

							</li>

						</ul>

					</div>

					<div class="tile-inner">
						<span class="text-overflow">@{{ row.name }}</span>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('modal')
	@include('usuarios.roles._modal-asing')
	@include('usuarios.edit._modal-status')
	@include('usuarios.delete._modal-delete')
@stop

@section('post-script')
	<script src="/js/vue-usuarios.js"></script>
@stop