@extends('layout.app')

@section('page-title', $usuario->name)

@section('content')
	<div class="row">
		<div class="col-sm-2">
			<img class="img-responsive img-thumbnail" src="/images/users/{{ $usuario->profile->avatar }}" alt="{{ $usuario->name }}"/>
		</div>
		<div class="col-md-10">
			<h3>{{ $usuario->name }}</h3>
		</div>
	</div>
@stop