@if(Session::has('flash_message'))

	<div class="alert alert-success alert-dismissible" role="alert">
		<span class="icon text-alt">error</span>
		<span class="white-text"><i class="smaller material-icons">done</i>{{Session('flash_message')}}</span>
	</div>

@elseif(Session::has('errors'))

	<div class="alert alert-warning alert-dismissible" role="alert">
		<span class="icon text-alt">error</span>
		<strong>Warning!</strong>
		<ol>
			@foreach ($errors->all() as $error)
				<li><span class="white-text">{{ $error }}</span></li>
			@endforeach
		</ol>
	</div>

@endif

