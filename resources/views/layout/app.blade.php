<!DOCTYPE html>
<html>
<head>
	<!--Import materialize.css-->

	@yield('angular-module')
	<meta id="csrf-token" value="<?php echo csrf_token() ?>" />

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>@yield('page-title', 'Devel')</title>

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

	<div class="content hide-on-print">
		<div class="content-heading">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="heading margin-top-no">@yield('page-title', 'Devel')</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<ol class="breadcrumb hidden-print">
				@yield('breadcrumb')
			</ol>
		</div>

		<div class="row">
			@include('partials._flash')
		</div>

		<div class="row">
			<div class="col-sm-12">
				<section class="content-inner margin-top-no">
					@yield('content')
				</section>
			</div>
		</div>
	</div>
	@yield('modal')
<!-- Scripts -->
<script src="{{ URL::asset("js/app.js") }}"></script>
@yield('post-script')

</body>
</html>
