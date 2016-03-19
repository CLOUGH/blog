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

    mix.styles([
    	'../plugins/bootstrap/css/bootstrap.min.css',
    	'../plugins/font-awesome/css/font-awesome.min.css',
    	'../plugins/et-line/et-line.css',
    	'../plugins/scrollbar/jquery.mCustomScrollbar.css',
    	'../plugins/magnific-popup/magnific-popup.css',
    	'../plugins/magnific-popup/magnific-popup.css',
        '../plugins/cubeportfolio/css/cubeportfolio.min.css',
        '../plugins/rev-slider/css/settings.css',
        '../plugins/rev-slider/css/layers.css',
        '../plugins/rev-slider/css/navigation.css',
    	'animate.css',
    	'/theme/base.css',
    	'/theme/dark.css'
    ]);

    mix.scripts([
		'../plugins/html5shiv.js',
    	'../plugins/respond.min.js',
    ],'./public/js/ie9.js');

    mix.scripts([
    	
		'../plugins/jquery.migrate.min.js',
		'../plugins/bootstrap/js/bootstrap.min.js',
		'../plugins/jquery.back-to-top.js',
		'../plugins/jquery.smooth-scroll.js',
		'../plugins/jquery.animsition.min.js',
		'../plugins/validation/jquery.validate.min.js',
		'../plugins/validation/additional-methods.min.js',
		'../plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js',
		'../plugins/jquery.wow.min.js',
		'../plugins/magnific-popup/jquery.magnific-popup.min.js',
        '../plugins/jquery.appear.js',
        '../plugins/cubeportfolio/js/jquery.cubeportfolio.min.js',
        '../scripts/app.js',
    ]);

    mix.scripts([
        '../plugins/jquery.min.js',
        "../plugins/rev-slider/js/jquery.themepunch.tools.min.js",
        "../plugins/rev-slider/js/jquery.themepunch.revolution.min.js",
        "../plugins/rev-slider/js/extensions/revolution.extension.actions.min.js",
        "../plugins/rev-slider/js/extensions/revolution.extension.carousel.min.js",
        "../plugins/rev-slider/js/extensions/revolution.extension.kenburn.min.js",
        "../plugins/rev-slider/js/extensions/revolution.extension.layeranimation.min.js",
        "../plugins/rev-slider/js/extensions/revolution.extension.migration.min.js",
        "../plugins/rev-slider/js/extensions/revolution.extension.navigation.min.js",
        "../plugins/rev-slider/js/extensions/revolution.extension.parallax.min.js",
        "../plugins/rev-slider/js/extensions/revolution.extension.slideanims.min.js",
        "../plugins/rev-slider/js/extensions/revolution.extension.video.min.js",
    ],'./public/js/header.js');

    mix.copy('resources/assets/img','public/assets/img');
    mix.copy('resources/assets/scripts/portfolio','public/js/portfolio');
    mix.copy('resources/assets/scripts/components','public/js/components');
    mix.copy('resources/assets/plugins/bootstrap/fonts','public/fonts');
    mix.copy('resources/assets/plugins/et-line/fonts','public/fonts');
    mix.copy('resources/assets/plugins/font-awesome/fonts','public/fonts');
    mix.copy('resources/assets/plugins/rev-slider/fonts','public/fonts');
});
