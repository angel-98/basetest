@extends('layout.app')
@section('page-title', 'Administración de Permisos')
@section('v-control', 'id="permisos"')
@section('breadcrumb')
	<li><a href="/">Dashboard</a></li>
	<li><a class="active" href="/permisos">Permisos</a></li>
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
				<th>Permisos</th>
				<th>Descripción</th>
				<th>Eliminar</th>
			</tr>
			</thead>
			<tbody>
			<tr v-repeat="row:rows">
				<td><a v-on="click: getRowEdit(row)">@{{ row.name }}</a></td>
				<td>@{{ row.description }}</td>
				<td><a v-on="click: getRowDelete(row)" class="red-text"><span class="icon">delete</span></a></td>
			</tr>
			</tbody>
		</table>
	</div>

	@include('partials._pagination')
@stop

@section('modal')
	@include('permissions.edit._modal-edit')
	@include('permissions.create._modal-create')
	@include('permissions.delete._modal-delete')
@stop

@section('post-script')
	<script src="/js/vue-permisos.js"></script>
@stop