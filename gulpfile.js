var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');

    mix.styles([
    	'angular-loading-bar/build/loading-bar.css',
    	'foundation/css/foundation.css',
    	'foundation/css/normalize.css',
    	'font-awesome/css/font-awesome.css'
    ],'public/css/vendor.css','./resources/assets/bower_components')

    mix.copy('./resources/assets/bower_components/font-awesome/fonts', './public/fonts')

    mix.scripts([
    	'jquery/dist/jquery.js',
    	'fastclick/lib/fastclick.js',
    	'jquery-placeholder/jquery.placeholder.js',
    	'jquery.cookie/jquery.cookie.js',
    	'foundation/js/foundation.js',
        'foundation/js/foundation/foundation.topbar.js',
    	'modernizr/modernizr.js',
    	'angular/angular.js',
    	'angular-ui-router/release/angular-ui-router.js',
    	'lodash/lodash.js',
    	'restangular/dist/restangular.js',
    	'angular-loading-bar/build/loading-bar.js',
    	'angular-foundation/mm-foundation-tpls.js',
        'typed.js/dist/typed.min.js',
        'holderjs/holder.js',


    ],'public/js/vendor.js','./resources/assets/bower_components');


    mix.scripts([
    	'**/*.js'
    ],'public/js/app.js','./public/app/')
});
