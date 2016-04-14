var gulp = require('gulp'),
    coffee = require('gulp-coffee');

var utils = require('../utils'),
  config = require('../config');

gulp.task('coffee', function() {
  gulp.src(config.coffee.src)
    .pipe(coffee({bare: true}).on('error', utils.handleError))
    .pipe(gulp.dest(config.coffee.dest));
});