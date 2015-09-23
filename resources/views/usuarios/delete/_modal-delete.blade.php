<div aria-hidden="true" class="modal fade" id="modal-delete" role="dialog" tabindex="-1" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-heading">
				<a class="modal-close" data-dismiss="modal">×</a>
				<h2 class="modal-title text-red">Eliminar usuario</h2>
			</div>
			<div class="modal-inner">
				<h5> Estas seguro de desea eliminar el usuario <strong  class="text-red">"@{{ user.name }}"</strong>, esta operación no se puede deshacer y se perderan todos
				los datos relacionados al mismo!!</h5>
			</div>
			<div class="modal-footer">
				<p class="text-right">
				<form v-on="submit: submitDelete">
					<button class="btn btn-red" type="submit" >ELIMINAR</button>
				</form>
				<br/>
			</div>
		</div>
	</div>
</div>
</div>