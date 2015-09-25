@extends('layout.app')

@section('page-title', 'Ayuda y FAQ')

@section('breadcrumb')
	<li><a href="/">Dashboard</a></li>
	<li><a class="active" href="/help">Ayuda</a></li>
@stop

@section('content')
	<article class="markdown-body entry-content" itemprop="mainContentOfPage"><h2><a id="user-content-projecto-base-para-el-inicio-rapido-de-proyectos-en-laravel-51-en-desarrollo" class="anchor" href="#projecto-base-para-el-inicio-rapido-de-proyectos-en-laravel-51-en-desarrollo" aria-hidden="true"><span class="octicon octicon-link"></span></a>Projecto Base para el inicio rapido de proyectos en Laravel 5.1 (en desarrollo)</h2>

		<p>Sistema de autentificación de usuarios, Roles y permisos.
			Como respaldo, la arquitectura de Laravel 5.1 y pensado como un stater point para futuras aplicaciones online o intranet. el esquema de permisos esta preconfigurados y funciona en el frontend con vuejs ademas de estar formateado según las especificaciones de
			materia desing.</p>

		<h1><a id="user-content-incluye-paquetes-preconfigurados" class="anchor" href="#incluye-paquetes-preconfigurados" aria-hidden="true"><span class="octicon octicon-link"></span></a>Incluye paquetes preconfigurados</h1>

		<ul>
			<li>caffeinated/Shinobi para permisos y roles</li>
			<li>Cviebrock/eloquent-sluggable para url's amigables (Configurar con Shinobi trail)</li>
			<li>barryvdh/laravel-dompdf</li>
			<li>Iluminate/html para formularios o etiquetado en blade </li>
		</ul>

		<h1><a id="user-content-incluye-librerias-en-bower_componets" class="anchor" href="#incluye-librerias-en-bower_componets" aria-hidden="true"><span class="octicon octicon-link"></span></a>Incluye librerias en bower_componets</h1>

		<ul>
			<li>Angular</li>
			<li>fullCalendar</li>
			<li>moment</li>
			<li>select2</li>
			<li>backbone</li>
			<li>underscore</li>
			<li>vue</li>
			<li><p>jquery.ui</p>

				<p>**Los framework frontend estan con sus repectivos archivos SASS completos, para poderlos convinar de ser necesario.</p></li>
			<li>materialize</li>
			<li>material</li>
			<li>foundation</li>
			<li>bootstrap3</li>
		</ul>

		<h1><a id="user-content-instrucciones" class="anchor" href="#instrucciones" aria-hidden="true"><span class="octicon octicon-link"></span></a>Instrucciones</h1>

		<ul>
			<li>Haber descargado y configurado <strong>composer</strong>, seria preferible tener un ambiente de trabajo enb vagrant, para ser precisos <strong>Homestead</strong> que esta listo para trabajar con laravel 5.1, tambien configurar nodejs o instalr nvm de preferencia por la cuestion de versiones.</li>
			<li>Configurar correctamente el archivo .env</li>
			<li>Correr dentro de la carpeta root $npm install y $bower install para las librerias js y elixir (gulp)</li>
			<li>Correr las migraciones y los seeds de base de datos en php artisan (el usuario es <a href="mailto:gbelot2003@hotmail.com">gbelot2003@hotmail.com</a> y pass admin123)</li>
		</ul>

		<h1><a id="user-content-todo" class="anchor" href="#todo" aria-hidden="true"><span class="octicon octicon-link"></span></a>Todo</h1>

		<p><em>- Metodos asincronicos en el fomularios de registro(check)
			</em>- Configurar correctamente el sistema de permisos(check)</p>

		<ul>
			<li>mejorar el sistema de seguridad (verificar los formularios correctamente)</li>
			<li>Probar el sistema de password-reset</li>
			<li>Limpiar la vista de perfiles(check)</li>
			<li>revisar los controladores he implementar arquitectura flux donde sea necesario.</li>
		</ul>

		<p>El sistema aun esta en desarrollo, lo voy tenermando en cuanto me va dando timpo de tanto en tanto así que no seas tan exigentes a la hora de revisarlo ;)</p>
	</article>
@stop