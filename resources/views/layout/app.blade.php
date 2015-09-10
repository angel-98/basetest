<!DOCTYPE html>
<html>
<head>
	<!--Import materialize.css-->

	@yield('angular-module')
	<meta id="csrf-token" value="<?php echo csrf_token() ?>" />

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>@yield('page-title', 'Basetest')</title>

	<link rel="stylesheet" href="{{ URL::asset("css/app.css") }}">
	@yield('addcss')

	<!-- favicon -->
	<!-- ... -->

	<!-- ie -->
	<!--[if lt IE 9]>
	<script src="/js/vendor/html5shiv.min.js"></script>
	<script src="/js/vendor/respond.min.js"></script>
	<![endif]-->
</head>

<body class="avoid-fout" @yield('v-control', "")>

	@include('partials._loader')

	@include('partials._main-header')

	@include('partials._nav')

	@include('partials._profile-nav')

	<div class="content">
		<div class="content-heading">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="heading">@yield('page-title', 'Basetest')</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<section class="content-inner">
					<p>Material is an HTML5 UI design based on Google Material.</p>
					<blockquote>
						<p>A visual language for our users that synthesizes the classic principles of good design with the innovation and possibility of technology and science. This is material design.</p>
						<p><a class="text-break" href="http://www.google.com/design/spec/material-design/introduction.html">http://www.google.com/design/spec/material-design/introduction.html</a></p>
					</blockquote>
				</section>
			</div>
		</div>
	</div>

<!-- Scripts -->
<script src="{{ URL::asset("js/app.js") }}"></script>
@yield('post-script')

</body>
</html>
