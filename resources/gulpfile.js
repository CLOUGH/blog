var gulp 		= require('gulp');
var less 		= require('gulp-less');
var minifycss 	= require('gulp-minify-css');
var autoprefixer= require('gulp-autoprefixer');
var concatcss	= require('gulp-concat-css');
var rename 		= require("gulp-rename");
var uglify 		= require('gulp-uglify');
var concat 		= require('gulp-concat');
//var imagemin	= require('gulp-imagemin');
var sass 		= require('gulp-sass');
//twiter bootstrap directories from vendor
var twbsLessDIR = 'vendor/twbs/bootstrap/less';
var twbsJSDir = 'vendor/twbs/bootstrap/js';
var twbsFonts = 'vendor/twbs/bootstrap/fonts';

//assests
var assetsLessDir = 'app/assets/less';
var assetsJSDir = 'app/assets/js';
var assetsImagesDir = 'app/assets/images';
var assetsFrontDir = 'app/assets/fonts';
var assetsSassDir = 'app/assets/sass';

//Assests tasks
gulp.task('less',function(){
	return gulp.src(assetsLessDir+'/*.less')
		.pipe(less())
		.pipe(gulp.dest('public/css'));

});
gulp.task('js', function(){
	return gulp.src(assetsJSDir + '/**/*.js')
		.pipe(concat('main.js'))
		.pipe(uglify({compress:true}))
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('public/js'));
})
gulp.task('fonts', function(){
	return gulp.src(assetsFrontDir+'/**/*.*')
		.pipe(gulp.dest('public/fonts'));
});
gulp.task('images', function(){
	return gulp.src(assetsImagesDir+'/**/*')
		.pipe(imagemin())
		.pipe(gulp.dest('public/images'));
});

gulp.task('sass',function(){
	return gulp.src(assetsSassDir+'/main.scss.scss')
		.pipe(sass())
		.pipe(minifycss())	
		.pipe(autoprefixer())
		.pipe(rename({suffix:'.min'}))
		.pipe(gulp.dest('public/css'));
});

// //Bootstrap tasks
// gulp.task('bootstrapLess',function(){
// 	return gulp.src(twbsLessDIR+'/bootstrap.less')
// 		.pipe(less())
// 		.pipe(autoprefixer())
// 		.pipe(minifycss())
// 		.pipe(rename({suffix:'.min'}))
// 		.pipe(gulp.dest('public/css'));
// });

// gulp.task('bootstrapJS', function(){
// 	return gulp.src(twbsJSDir + '/**/*.js')
// 		.pipe(concat('bootstrap.js'))
// 		.pipe(uglify({compress:true}))
// 		.pipe(rename({suffix: '.min'}))
// 		.pipe(gulp.dest('public/js'));
// })
// gulp.task('bootstrapFonts', function(){
// 	return gulp.src(twbsFonts+'/**/*.*')
// 		.pipe(gulp.dest('public/fonts'));
// });

gulp.task('watch', function(){
	gulp.watch(assetsLessDir+'/**/*.less',['less']);
	gulp.watch(assetsJSDir+'/**/*.js',['js']);
	gulp.watch(assetsFrontDir+'/**/*',['fonts']);
	gulp.watch(assetsImagesDir+'/**/*',['images']);
	gulp.watch(assetsSassDir+'/**/*.scss',['sass']);

	// gulp.watch(twbsLessDIR+'/**/*.less',['bootstrapLess']);
	// gulp.watch(twbsJSDir+'/**/*.js',['bootstrapJS']);
	// gulp.watch(twbsFonts+'/**/*.*',['twbsFonts']);
});

gulp.task('default', [
	'watch',
	'sass',
	'less',
	'js'
	//'images',
	//'fonts',
	// 'bootstrapLess',
	// 'bootstrapJS',
	// 'bootstrapFonts'
]);

