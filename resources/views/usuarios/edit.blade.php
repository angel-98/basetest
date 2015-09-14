@extends('layout.app')

@section('page-title', $usuario->name)
@section('breadcrumb')
	<li><a href="/">Dashboard</a></li>
	<li><a href="/usuarios">usuarios</a></li>
	<li><a href="/usuarios/{{ $usuario->slug }}">{{ $usuario->name }}</a></li>
	<li><a class="active" href="#!">edit</a></li>
@stop