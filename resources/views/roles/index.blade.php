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
			</tr>
			</thead>
			<tbody>
			<tr v-repeat="row:rows">
				<td><a href="/roles/@{{ row.slug }}">@{{ row.name }}</a></td>
				<td>@{{ row.description }}</td>
			</tr>
			</tbody>
		</table>
	</div>

	@include('partials._pagination')

	@include('partials._vue-data')

@stop

@section('modal')
	@include('roles.create._modal-create')
@stop

@section('post-script')
	<script src="/js/vue-roles.js"></script>
@stop