<div aria-hidden="true" class="modal fade" id="modal-delete" role="dialog" tabindex="-1" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-heading">
				<a class="modal-close" data-dismiss="modal">×</a>
				<h2 class="modal-title">Eliminar rol</h2>
			</div>
			<div class="modal-inner">
				<h4>Estas seguro de quere eliminar el rol <strong class="text-red">@{{ permisos.name }}</strong>, esta operacion no se puede revertir</h4>
			</div>
			<div class="modal-footer">
				<p class="text-right">
				<form v-on="submit: submitDelete">
					<button class="btn btn-red" type="submit" >Eliminar</button>
				</form>
				<button class="btn btn-flat btn-alt"  data-dismiss="modal" type="button">Cancelar</button></p>
			</div>
		</div>
	</div>
</div>
</div>