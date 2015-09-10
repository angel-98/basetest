
<nav aria-hidden="true" class="menu menu-right" id="profile" tabindex="-1">
	<div class="menu-scroll">

		@if (Auth::check())
			<div class="menu-top">
				<div class="menu-top-img">
					<img alt="{{ Auth::user()->name }}" src="../images/samples/landscape.jpg">
				</div>
				<div class="menu-top-info">
					<a class="menu-top-user" href="javascript:void(0)"><span class="avatar pull-left"><img alt="{{ Auth::user()->name }}" src="../images/users/avatar-001.jpg"></span>{{ Auth::user()->name }}</a>
				</div>
				<div class="menu-top-info-sub">
					<small>Some additional information about John Smith</small>
				</div>
			</div>

			<div class="menu-content">
				<ul class="nav">
					<li>
						<a class="waves-attach" href="javascript:void(0)"><span class="icon icon-lg">account_box</span>Profile Settings</a>
					</li>
					<li>
						<a class="waves-attach" href="/auth/logout"><span class="icon icon-lg">exit_to_app</span>Logout</a>
					</li>
				</ul>
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