@extends('layout.app')
@section('page-title', 'Administración de Roles')

@section('content')
	<div class="row">
		<a class="btn waves-attach waves-button waves-effect" data-toggle="modal" href="#modal-create">Nuevo rol</a>
	</div>
	<div class="table-responsive">
		<table class="table" title="Default Tabl">
			<thead>
			<tr>
				<th></th>
				<th>Sit amet consectetur</th>
				<th>Adipiscing elit duis</th>
			</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
@stop

@section('modal')
	<div aria-hidden="true" class="modal fade" id="modal-create" role="dialog" tabindex="-1" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-heading">
					<a class="modal-close" data-dismiss="modal">×</a>
					<h2 class="modal-title">Modal Title</h2>
				</div>
				<div class="modal-inner">
					<form action="post">

					</form>
				</div>
				<div class="modal-footer">
					<p class="text-right"><button class="btn btn-flat btn-alt" data-dismiss="modal" type="button">Close</button><button class="btn btn-flat btn-alt" data-dismiss="modal" type="button">OK</button></p>
				</div>
			</div>
		</div>
	</div>
@stop