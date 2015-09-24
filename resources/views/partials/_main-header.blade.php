<header class="header header-transparent header-waterfall hidden-print">
	<ul class="nav nav-list pull-left">
		<li>
			<a data-toggle="menu" href="#menu">
				<span class="icon icon-lg">menu</span>
			</a>
		</li>
	</ul>

	<a class="header-logo margin-left-no" href="/">Devel</a>

	<!-- Profile -->
	<ul class="nav nav-list pull-right">
		<li>
			@if (! Auth::check())
				<a data-toggle="menu" href="#profile">
					<span class="access-hide">login</span>
					<span class="wicon wicon-key2 icon-2x hidden-print"></span>
				</a>
			@else
			<a data-toggle="menu" href="#profile">
				<span class="access-hide">{{ Auth::user()->name }}</span>
				<span class="wicon wicon-cogs icon-2x hidden-print"></span>
			</a>
		</li>
		@endif
	</ul>
	<!-- Profile -->

</header>