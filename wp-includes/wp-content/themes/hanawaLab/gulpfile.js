var gulp = require('gulp');
var plumber = require('gulp-plumber');
var runSequence = require('run-sequence');
var autoprefixer = require('gulp-autoprefixer');

/* Server
****************************** */
var browser = require('browser-sync');
gulp.task('server', function() {
	browser({
		server: {
			baseDir: './'
		}
	});
});

/* Clean
****************************** */
var del = require('del');
gulp.task('clean', function() {
	del(['./style.css']);
});

/* Sass
****************************** */
var sass = require('gulp-sass');
gulp.task('sass', function() {
	gulp.src(['./scss/**/*.scss', '!./scss/**/_*.scss'])
		.pipe(plumber())
		.pipe(sass())
		.pipe(sass({outputStyle: 'expanded'}))
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
		.pipe(gulp.dest('./'))
		.pipe(browser.reload({stream:true}))
});


/* Combine MediaQuery
****************************** */
var cmq = require('gulp-combine-media-queries');
gulp.task('cmq', function() {
	gulp.src('./*.css')
		.pipe(plumber())
		.pipe(cmq({
			log: true
		}))
		.pipe(gulp.dest('./'));
});


/* Watch
****************************** */
var watch = require('gulp-watch');
gulp.task('watch', function() {
	watch(['./scss/**/*.scss'], function(event){
		gulp.start('sass');
	});
	watch(['./**/*.php'], function(event){
		browser.reload({stream:true})
	});
});

gulp.task('build', ['clean'], function (callback) {
	return runSequence(['sass'], callback);
});


/* Default
****************************** */
gulp.task('default', function() {
	return runSequence(['watch']);
});
