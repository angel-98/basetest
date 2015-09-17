<div class="table-responsive">

	<table class="table">
		<tbody>
		<tr class="visible-print-inline-block">
			<td>
				<label  style="display: block"><span class="text-blue">Nombre: </span></label> {{ $usuario->name }}
			</td>
		</tr>
		<tr>
			<td>
				<label  style="display: block"><span class="text-blue">e-mail: </span></label> {{ $usuario->email }}
			</td>
		</tr>

		@if($usuario->profile->github != null)
			<tr>
				<td>
					<label style="display: block"><span class="text-blue">Github: </span></label>
					<a target="_blank" href="{{ $usuario->profile->github }}">{{ $usuario->profile->github }}</a>
				</td>
			</tr>
		@endif

		@if($usuario->profile->facebook != null)
			<tr>
				<td>
					<label  style="display: block"><span class="text-blue">facebook: </span></label>
					<a target="_blank" href="{{ $usuario->profile->facebook }}">{{ $usuario->profile->facebook }}</a>
				</td>
			</tr>
		@endif

		@if($usuario->profile->twitter != null)
			<tr>
				<td>
					<label  style="display: block"><span class="text-blue">twitter: </span></label>
					<a target="_blank" href="https://twitter.com/gbelot2003">{{ $usuario->profile->twitter }}</a>
				</td>
			</tr>
		@endif

		<tr>
			<td>
				<label  style="display: block"><span class="text-blue">Drupal Association: </span></label>
				<a target="_blank" href="https://www.drupal.org/u/gbelot2003">drupal.org/u/gbelot2003</a>
			</td>
		</tr>

		@if($usuario->profile->phone != null)
			<tr>
				<td>
					<label  style="display: block"><span class="text-blue">Teléfono: </span></label> {{ $usuario->profile->phone }}
				</td>
			</tr>
		@endif

		@if($usuario->profile->mobile != null)
			<tr>
				<td>
					<label  style="display: block"><span class="text-blue">Celular: </span></label> {{ $usuario->profile->mobile }}
				</td>
			</tr>
		@endif
		</tbody>

	</table>

</div>