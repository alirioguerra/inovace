// Start Gulp Modules
var gulp = require('gulp'),
	sass = require('gulp-sass'),
	concat = require('gulp-concat'),
	//uglify = require('gulp-uglify'),
	//rename = require("gulp-rename"),
	uglify = require('gulp-uglify-es').default,
	autoprefixer = require('gulp-autoprefixer'),
	watch = require('gulp-watch'),
	gutil = require('gulp-util'),
	plumber = require('gulp-plumber');

// Sass Function
gulp.task('sass', function () {
	gulp.src('css/**/*.scss')
		.pipe(plumber())
		.pipe(sass())
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
		.pipe(sass({
			outputStyle: 'compressed'
		}))
		.pipe(gulp.dest('./'))
});

// Plugins Concat
gulp.task("plugins-script", function () {
	return gulp.src("js/plugins/*.js")
		.pipe(plumber())
		.pipe(concat('plugins.min.js'))
		.pipe(uglify().on('error', function (uglify) {
			console.error(uglify.message);
			this.emit('end');
		}))
		.pipe(gulp.dest("js/"));
});

// Main Concat
gulp.task('main-script', function () {
	gulp.src('js/main/*.js')
		.pipe(plumber())
		.pipe(concat('main.min.js'))
		.pipe(uglify().on('error', function (uglify) {
			console.error(uglify.message);
			this.emit('end');
		}))
		.pipe(gulp.dest('js/'))
});

// Watch Function
gulp.task('default', ['sass'], function () {
	gulp.watch('css/**/*.scss', ['sass']);
	gulp.watch('js/main/*.js', ['main-script']);
	gulp.watch('js/plugins/*.js', ['plugins-script']);
});
