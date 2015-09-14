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

    // Librerias de uso especifico en la aplicación
    mix.scripts(['jquery2.1.4.min.js', 'base.js', 'init.js'], 'public/js/app.js');
    mix.scripts(['vue/vue.min.js', 'vue/vue-resource.min.js', 'vue/vue-roles.js'], 'public/js/vue-roles.js');
    mix.scripts(['vue/vue.min.js', 'vue/vue-resource.min.js', 'vue/vue-permisos.js'], 'public/js/vue-permisos.js');
    mix.scripts(['vue/vue.min.js', 'vue/vue-resource.min.js', 'vue/vue-usuarios.js'], 'public/js/vue-usuarios.js');
    mix.scripts(['select2.full.min.js', 'roles-edit.js'], 'public/js/roles-edit.js');
    mix.scripts(['select2.full.min.js', 'jquery.cleditor.min.js', 'user-edit.js'], 'public/js/roles-edit.js');

});

