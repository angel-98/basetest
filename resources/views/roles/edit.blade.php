@extends('layout.app')
@section('page-title', "Role | ". $roles->name)

@section('content')
	<div class="row">
		<div class="col-md-7">
			@include('roles.edit._form')
		</div>
		<div class="col-md-5">
			@include('roles.edit._info')
		</div>
	</div>

@stop