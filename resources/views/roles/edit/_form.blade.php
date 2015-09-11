<fieldset>
	<legend>Edit Form</legend>
	<form method="post" action="{{ action('RolesController@update', $roles->id) }}">

		{!! csrf_field() !!}

		<input name="_method" type="hidden" value="PUT">

		<div class="row">
			<div class="col-sm-12 col-md-4">
				<div class="form-group form-group-label">
					<div class="row">
						<div class="col-sm-12">
							<label class="floating-label" for="name">Nombre</label>
							<input class="form-control" maxlength="65" id="name" type="text" name="name" value="{{ $roles->name }}">
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-8">
				<div class="form-group form-group-label">
					<div class="row">
						<div class="col-sm-12">
							<label class="floating-label" for="description">Descripción</label>
							<input class="form-control" maxlength="255" id="description" type="text" name="description" value="{{ $roles->description }}">
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="row">
			<p class="text-left">
				<button type="submit"  class="btn btn-blue">Save change</button>
				<a class="btn btn-flat btn-alt" href="/roles">Cancel</a>
			</p>
		</div>

	</form>

</fieldset>