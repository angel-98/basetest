@extends('layout.app')
@section('page-title', "Role | ". $roles->name)
@section('breadcrumb')
	<li><a href="/">Dashboard</a></li>
	<li><a href="/roles">Roles</a></li>
	<li class="active">{{ $roles->name }}</li>
@stop

@section('content')
	<div class="row">
		<div class="col-md-7">
			@include('roles.edit._form')
			<div class="col-md-1 col-md-offset-11 col-sm-12 text-left">
				<a class="fbtn fbtn-red left" data-toggle="modal" title="Eliminar rol" href="#modal-delete"><span class="icon">delete</span></a>
			</div>
		</div>
		<div class="col-md-5">
			@include('roles.edit._info')
		</div>
	</div>
@stop

@section('modal')
	@include('roles.edit._modal-delete')
@stop


@section('post-script')
	<script src="/js/roles-edit.js"></script>
@stop