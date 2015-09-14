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

	<div class="table-responsive">
		<table class="table" title="Default Tabl">
			<thead>
			<tr>
				<th>Rol</th>
				<th>email</th>
				<th>Estado</th>
			</tr>
			</thead>
			<tbody>
			<tr v-repeat="row:rows">
				<td><a href="/usuarios/@{{ row.profile.id }}">@{{ row.name }}</a></td>
				<td>@{{ row.email }}</td>
				<td>@{{ estadoTrans(row.profile) }}</td>
			</tr>
			</tbody>
		</table>
	</div>

	@include('partials._vue-data')
@stop

@section('modal')

@stop

@section('post-script')
	<script src="/js/vue-usuarios.js"></script>
@stop