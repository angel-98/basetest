## Projecto Base para el inicio rapido de proyectos en Laravel 5.1 (en desarrollo)
Sistema de autentificación de usuarios, Roles y permisos.
Como respaldo, la arquitectura de Laravel 5.1 y pensado como un stater point para futuras aplicaciones online o intranet. el esquema de permisos esta preconfigurados y funciona en el frontend con vuejs ademas de estar formateado según las especificaciones de 
materia desing.

# Incluye paquetes preconfigurados
- caffeinated/Shinobi para permisos y roles
- Cviebrock/eloquent-sluggable para url's amigables (Configurar con Shinobi trail)
- barryvdh/laravel-dompdf
- Iluminate/html para formularios o etiquetado en blade 

# Incluye librerias en bower_componets
- Angular
- fullCalendar
- moment
- select2
- backbone
- underscore
- vue
- jquery.ui

 **Los framework frontend estan con sus repectivos archivos SASS completos, para poderlos convinar de ser necesario.
- materialize
- material
- foundation
- bootstrap3

# Instrucciones
- Haber descargado y configurado **composer**, seria preferible tener un ambiente de trabajo enb vagrant, para ser precisos **Homestead** que esta listo para trabajar con laravel 5.1, tambien configurar nodejs o instalr nvm de preferencia por la cuestion de versiones.
- Configurar correctamente el archivo .env
- Correr dentro de la carpeta root $npm install y $bower install para las librerias js y elixir (gulp)
- Correr las migraciones y los seeds de base de datos en php artisan (el usuario es gbelot2003@hotmail.com y pass admin123)

# Todo
- **Metodos asincronicos en el fomularios de registro(check)**
- **Configurar correctamente el sistema de permisos(check)**
- **revisar los controladores he implementar arquitectura flux donde sea necesario.(check)**
- mejorar el sistema de seguridad (verificar los formularios correctamente)
- Crear modulo de skills en perfiles
- Probar el sistema de password-reset


** El sistema aun esta en desarrollo, lo voy tenermando en cuanto me va dando timpo de tanto en tanto así que no seas tan exigentes a la hora de revisarlo ;)**
**------------------------------------------------------------------------------------------------------------------------------------------------------------**
## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
