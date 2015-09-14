
<hr style="border: red 1px solid"/>
<div class="row">

	<div class="col-sm-12 col-md-6 form-group-label">
		<label class="floating-label" for="name">Nombre</label>
		<input class="form-control" id="name" name="name" value="{{ $usuario->name }}" type="text">
	</div>

	<div class="col-sm-12 col-md-6 form-group-label">
		<label class="floating-label" for="email">email</label>
		<input class="form-control" id="email" name="email" value="{{ $usuario->email }}" type="email">
	</div>

</div>
<legend>Password</legend>
<hr style="border: red 1px solid"/>

<div class="row">

	<div class="col-sm-12 col-md-6 form-group-label">
		<label class="floating-label" for="password">contraseña</label>
		<input class="form-control" id="password" name="password"  type="password">
	</div>

	<div class="col-sm-12 col-md-6 form-group-label">
		<label class="floating-label" for="password_confirmation">Confirmar contraseña</label>
		<input class="form-control" id="password_confirmation" name="password_confirmation"  type="password">
	</div>

</div>