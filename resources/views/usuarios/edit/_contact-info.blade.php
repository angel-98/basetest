
	<legend>Avatar</legend>
	<hr style="border: red 1px solid"/>
	<div class="row">
		<div class="col-sm-12">
			<input id="input-file" name="avatar" type="file">
		</div>
		<div class="col-sm-12">
			<img class="img-responsive img-thumbnail" src="/images/users/{{ $usuario->profile->avatar }}" alt=" $usuario->id"/>
		</div>
	</div>

	<legend>Información de contacto</legend>
	<hr style="border: red 1px solid"/>
	<p><small><span class="text-red">*</span> Copia las url a tus redes sociales y de desarrollo</small></p>
	<div class="row">

		<div class="col-sm-12 form-group-label">
			<label class="floating-label" for="github">Github</label>
			<input class="form-control" id="github" name="github" value="{{ $usuario->profile->github }}" type="text">
		</div>

		<div class="col-sm-12 form-group-label">
			<label class="floating-label" for="facebook">Facebook</label>
			<input class="form-control" id="facebook" name="facebook" value="{{ $usuario->profile->facebook }}" type="text">
		</div>

		<div class="col-sm-12 form-group-label">
			<label class="floating-label" for="twitter">Twitter</label>
			<input class="form-control" id="twitter" name="twitter" value="{{ $usuario->profile->twitter }}" type="text">
		</div>

		<div class="col-sm-12 form-group-label">
			<label class="floating-label" for="phone">Teléfono</label>
			<input class="form-control" id="phone" name="phone" value="{{ $usuario->profile->phone }}" type="text">
		</div>

		<div class="col-sm-12 form-group-label">
			<label class="floating-label" for="mobile">Celular</label>
			<input class="form-control" id="mobile" name="mobile" value="{{ $usuario->profile->mobile }}" type="text">
		</div>
	</div>
