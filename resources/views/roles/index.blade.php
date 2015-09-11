@extends('layout.app')
@section('page-title', 'Administración de Roles')
@section('v-control', 'id="roles"')

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
	<div aria-hidden="true" class="modal fade" id="modal-create" role="dialog" tabindex="-1" style="display: none;">
		<form method="post" v-on="submit: submitRoles">
			<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-heading">
							<a class="modal-close" data-dismiss="modal">×</a>
							<h2 class="modal-title">Modal Title</h2>
						</div>
						<div class="modal-inner">
							<div class="row">
								<div class="col-sm-12 col-md-4">
									<div class="form-group form-group-label">

										<div class="row">

											<div class="col-sm-12">
												<label class="floating-label" for="name">Nombre</label>
												<input class="form-control" maxlength="65" id="name" type="text" name="email" v-model="roles.name">
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-12 col-md-8">
									<div class="form-group form-group-label">
										<div class="row">
											<div class="col-sm-12">
												<label class="floating-label" for="description">Descripción</label>
												<input class="form-control" maxlength="255" id="description" type="text" name="description" v-model="roles.description">
											</div>
										</div>
									</div>
								</div>
							</div>


						<div class="modal-footer">
							<p class="text-right">
								<button type="submit"  class="btn btn-blue">Create</button>
								<button class="btn btn-flat btn-alt"  data-dismiss="modal" type="button">Close</button></p>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
@stop

@section('post-script')
	<script src="/js/vue-roles.js"></script>
@stop