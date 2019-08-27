var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

elixir.config.assetsPath = 'resources/';
elixir.config.publicPath = 'public/'

elixir(function(mix){
    mix.sass('stylesheet.scss');
    mix.scripts([
        'app.js'
    ]);
})
