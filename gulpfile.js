// Project specific variables
var url = 'http://www.live-gray.dev:8888'; // Local dev URL. Change as needed.

// Load plugins
var gulp 			= require('gulp'),
	stylus 			= require('gulp-stylus'),
	autoprefixer 	= require('gulp-autoprefixer'),
	minifyCss 		= require('gulp-minify-css'),
	rename 			= require('gulp-rename'),
	browserSync 	= require('browser-sync'),
	koutoSwiss 		= require('kouto-swiss'),
	jeet			= require('jeet'),
	rupture			= require('rupture'),
	sourcemaps 		= require('gulp-sourcemaps'),
	reload 			= browserSync.reload;

// Styles
gulp.task('styles', function(){
	 gulp.src('./styl/*.styl') // Two files get compiled here: main stylsheet (all partials imported) and editor stylesheet. Makes for simple gulpfile config, but maybe not best approach. Comments welcome! 
 	.pipe(stylus({
       use: [koutoSwiss(), jeet(), rupture()]
     }))
	.pipe(autoprefixer({
			browsers: ['last 2 versions']
		}))
	.pipe(sourcemaps.write())
	.on( 'error', console.log.bind(console) )
	.pipe(gulp.dest('./'))
	.pipe(reload({ stream : true }))
		// ---------------------------------------
	// Uncomment next 3 lines for minified css
	// ---------------------------------------
	.pipe(rename({ suffix: '.min' }))
	.pipe(minifyCss())
	.pipe(gulp.dest('./'))
});

gulp.task('default', ['styles', 'watch']);

// Browser Sync
gulp.task('browser-sync', function(){
	browserSync({
		proxy: url
		})
});

// Watch!
gulp.task('watch', ['browser-sync'], function(){
	gulp.watch('./styl/**/*.styl', ['styles']);
});

