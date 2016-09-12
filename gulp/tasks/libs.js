var gulp = require('gulp'),
  gulpif = require('gulp-if'),
  uglify = require('gulp-uglify'),
  concat = require('gulp-concat');

var utils = require('../utils'),
  config = require('../config');

gulp.task('libs', function () {
  gulp.src(config.libs.src)
    .on('error', utils.handleError)
    .pipe(concat('libs.js'))
    //.pipe(modernizr('modernizr-custom.js', config.modernizr.args))
    .pipe(gulpif(config.production, uglify()))
    .pipe(gulp.dest(config.libs.dest));
});