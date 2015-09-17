<div aria-hidden="true" class="modal fade" id="modal-status" role="dialog" tabindex="-1" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-heading">
				<a class="modal-close" data-dismiss="modal">×</a>
				<h2 class="modal-title"
				    v-class="
				        text-blue: user.estado === false,
				        text-red: user.estado === true
					">
					@{{ user.msgTitle }}
				</h2>
			</div>
			<div class="modal-inner">
				<h5>Estas seguro de quere "
					<span v-class="
						text-blue: user.estado === false,
						text-red: user.estado === true
					">
						@{{ user.msgEstado }}</span>" a el usuario
					<strong v-class="
						text-blue: user.estado === false,
						text-red: user.estado === true
					">
						@{{ user.name }}
					</strong>,
					@{{ user.msgPost }}</h5>
			</div>
			<div class="modal-footer">
				<p class="text-right">
				<form v-on="submit: submitStatus">
					<button class="btn" v-class="btn-blue: user.estado === false, btn-red: user.estado === true" type="submit" >@{{ user.msgEstado }}</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>