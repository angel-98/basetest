var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');

    // Librerias de uso general en la aplicación
    mix.scripts(['jquery2.1.4.min.js', 'base.js', 'init.js'], 'public/js/app.js');
    mix.scripts(['vue/vue.min.js', 'vue/vue-resource.min.js', 'vue/vue-roles.js'], 'public/js/vue-roles.js');

});

