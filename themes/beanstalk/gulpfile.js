'use strict';
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var importer = require('node-sass-globbing');
var plumber = require('gulp-plumber');
var browserSync = require('browser-sync').create();
var cssmin = require('gulp-cssmin');
var stripCssComments = require('gulp-strip-css-comments');
var uglify = require('gulp-uglify');
var shell  = require('gulp-shell');

var sass_config = {
  importer: importer,
  includePaths: [
    'node_modules/breakpoint-sass/stylesheets/',
    'node_modules/singularitygs/stylesheets/',
    'node_modules/modularscale-sass/stylesheets',
    'node_modules/compass-mixins/lib/'
  ]
};

gulp.task('uglify', function() {
  return gulp.src('js/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('js/js_min'));
});

gulp.task('clearcache', shell.task([
    'drupal cache:rebuild all'
]));

gulp.task('browser-sync', function() {
    browserSync.init({
        injectChanges: true,
        proxy: "local.drupalglamp.com.au"
    });
    gulp.watch("style/scss/**/*.scss", ['sass']);
    gulp.watch("style/css/**/*.css").on('change', browserSync.reload);
    gulp.watch("js/*", ['uglify']).on('change', browserSync.reload);
    gulp.watch('*.theme', ['clearcache']).on('change', browserSync.reload);
    gulp.watch('*.yml', ['clearcache']).on('change', browserSync.reload);
    gulp.watch('templates/**/*', ['clearcache']).on('change', browserSync.reload);
});

gulp.task('sass', function () {
  gulp.src('./style/scss/**/*.scss')
    .pipe(plumber())
    .pipe(sass(sass_config).on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 version']
    }))
    .pipe(stripCssComments({preserve: false}))
    .pipe(gulp.dest('./style/css'))
    .pipe(cssmin())
    .pipe(gulp.dest('./style/css'));
});

gulp.task('default', ['sass', 'uglify', 'browser-sync']);

