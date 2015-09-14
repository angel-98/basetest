@extends('layout.app')

@section('page-title', $usuario->name)
@section('breadcrumb')
	<li><a href="/">Dashboard</a></li>
	<li><a href="/usuarios">usuarios</a></li>
	<li><a class="active" href="#!">{{ $usuario->name }}</a></li>
@stop
@section('content')
	<div class="row">
		<div class="col-sm-2">
			<div class="row">
				<div class="col-sm-12">
					<p class="text-center">
						<img style="margin: 0 auto;" class="img-responsive img-thumbnail text-center" src="/images/users/{{ $usuario->profile->avatar }}" alt="{{ $usuario->name }}"/>
					</p>
					<p class="text-center"><a href="/usuarios/{{ $usuario->slug }}/edit">editar perfil</a></p>
				</div>
				<div class="col-md-12">
					<span class="text-blue">E-mail: </span> {{ $usuario->email }}
				</div>
			</div>
		</div>
		<div class="col-md-10">
			<h4 class="margin-top-no">Acerca de mi</h4>
			<blockquote>
				<p>Massa velit sed integer montes, ut a turpis cras natoque augue sit aliquet sed? Parturient massa vut duis in, augue risus odio montes non! Phasellus montes dis tortor dolor lacus sit lectus sagittis enim cras rhoncus sit dapibus quis nisi vut lectus phasellus rhoncus a quis a adipiscing porta sed ut urna? Pulvinar lectus. Turpis nunc, urna a turpis parturient. Nisi lectus adipiscing sit dignissim lacus. Ut mauris risus dictumst, magna nisi sociis phasellus aliquam vel non porta lundium dapibus porta vel placerat nisi! Lectus, mid dignissim scelerisque? Rhoncus eu, adipiscing, nunc! Rhoncus lectus purus odio? Scelerisque phasellus vel! Enim. Ac aenean, tincidunt dis lacus eu, a a in lundium sit vel enim nunc in ultrices quis urna habitasse rhoncus.</p>
				<p>In dis in tempor sed, mus nascetur ut porta. Scelerisque sociis? Tempor. Est enim, dolor. Vut sociis sit porta, turpis vut facilisis amet. Etiam dolor sed scelerisque turpis diam vel cum a turpis. Elementum eu duis parturient odio, aenean! Urna? Lectus augue dis odio. Magna non cursus cras sed placerat! Enim etiam dis, vel? Proin, mauris placerat tempor porta! Adipiscing nisi? Pellentesque augue in tristique diam proin magna lundium, mauris platea, magnis nascetur platea, risus in purus? Vel tristique odio scelerisque rhoncus in, integer natoque scelerisque ac enim ridiculus. Ultrices scelerisque porta rhoncus in in, mattis montes pulvinar odio montes, aliquet elit. Ultricies, proin montes nisi ac? Arcu integer? Ac. Phasellus arcu mauris sit etiam porta sit hac adipiscing.</p>
			</blockquote>
		</div>
	</div>
@stop