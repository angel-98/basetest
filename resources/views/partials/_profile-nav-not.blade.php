
<nav aria-hidden="true" class="menu menu-right hide-on-print" id="profile" tabindex="-1">
	<div class="menu-scroll">

		@if (Auth::check())

			<div class="menu-content">

				<ul class="nav">
					<li>
						<a class="waves-attach" href="/auth/logout"><span class="icon icon-lg">exit_to_app</span>Logout</a>
					</li>
				</ul>

				<!-- Settings, Only authorized users can see this -->
				<hr />
				<!-- settings --->
			</div>

		@else

			<div class="menu-content">
				<ul class="nav">
					<li>
						<a class="waves-attach" href="/auth/login"><span class="icon icon-lg">account_box</span>Login</a>
					</li>
					<li>
						<a class="waves-attach" href="/auth/register"><span class="icon icon-lg">add_to_photos</span>Register</a>
					</li>
				</ul>
			</div>

		@endif

	</div>
</nav>