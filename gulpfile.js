var elixir = require('laravel-elixir');
require('laravel-elixir-sass-compass');
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
    mix.compass('app.scss', 'public/css', {
        style: "compressed",
        sass: "./resources/assets/sass"
    });
});
