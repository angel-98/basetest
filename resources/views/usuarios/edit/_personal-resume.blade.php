<div class="row">
	<div class="col-sm-12 form-group-label">
		<label class="floating-label" for="label">Etiqueta de perfil</label>
		<input class="form-control" id="label" name="label" value="{{ $usuario->profile->label }}" type="text">
	</div>

	<div class="col-sm-12">
		<textarea class="" id="resume" name="resume">
			{{ $usuario->profile->resume }}
		</textarea>
	</div>
</div>