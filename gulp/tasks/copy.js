
var gulp = require('gulp'),
  changed = require('gulp-changed');

var utils = require('../utils'),
  config = require('../config');

gulp.task('copy', function () {
  return gulp.src(config.copy.src)
    .pipe(changed(config.copy.dest))
    .pipe(gulp.dest(config.copy.dest))
    .on('error', utils.handleError);
});
