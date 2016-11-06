const elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix .sass('app.scss');

    mix .scripts([
        'app.js',
        'route.js',
        'controllers/*.js'
    ], 'public/js/app.js');

    mix .copy('node_modules/jquery/dist/jquery.min.js', 'public/js/vendor/')
        .copy('node_modules/angular/*.min.js', 'public/js/vendor/')
        .copy('node_modules/angular-route/*.min.js', 'public/js/vendor/');
});
