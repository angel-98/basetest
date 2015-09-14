@extends('layout.app')

@section('page-title', 'Administración de Roles')

@section('v-control', 'id="roles"')

@section('breadcrumb')
	<li><a href="/">Dashboard</a></li>
	<li><a class="active" href="/roles">Roles</a></li>
@stop

@section('content')

	<div class="row">
		<div class="col-md-1 col-md-offset-11 col-sm-12 text-left">
		<a class="fbtn fbtn-alt left" data-toggle="modal" title="Nuevo Rol" href="#modal-create"><span class="icon">add</span></a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table" title="Default Tabl">
			<thead>
			<tr>
				<th>Rol</th>
				<th>Descripción</th>
				<th>Permisos relacionados</th>
			</tr>
			</thead>
			<tbody>
			<tr v-repeat="row:rows">
				<td><a href="/roles/@{{ row.slug }}">@{{ row.name }}</a></td>
				<td>@{{ row.description }}</td>
				<td>
					<ul class="nav nav-list">
						<li v-repeat="permisos in row.permissions">
							<a href="#!" class="tile waves-attach waves-effect" data-toggle="tooltip" data-placement="top" title="@{{ permisos.description }}">@{{ permisos.name }}</a>
						</li>
					</ul>
				</td>
			</tr>
			</tbody>
		</table>
	</div>

	@include('partials._pagination')
@stop

@section('modal')
	@include('roles.create._modal-create')
@stop

@section('post-script')
	<script src="/js/vue-roles.js"></script>
@stop