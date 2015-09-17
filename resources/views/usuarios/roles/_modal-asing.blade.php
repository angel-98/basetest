<div aria-hidden="true" class="modal fade" id="modal-asigned" role="dialog" tabindex="-1" style="display: none;">
	<form method="post" v-on="submit: submitAsigned">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-heading">
					<a class="modal-close" data-dismiss="modal">×</a>
					<h2 class="modal-title">Asignar Rol</h2>
				</div>

				<div class="modal-inner">

					<div class="row">
						<div class="col-sm-12 col-md-4">
							<div class="form-group form-group-label">

								<div class="row">

									<div class="col-sm-12">
										<label class="label" for="name">Nombre</label>
										<input class="form-control" id="name" type="text" name="email" v-model="user.name" disabled>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-8">
							<div class="form-group form-group-label">
								<div class="row">
									<div class="col-sm-12">
										<label class="label" for="roles">Roles</label>
										<select v-model="user.roles" style="width: 100%">
											<option v-repeat="selecteds in user.roles" value="@{{ selecteds.id }}" selected>@{{ selecteds.name }}</option>
											<option v-repeat="roles in roles" value="@{{ roles.id }}">@{{ roles.text }}</option>
										</select>
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