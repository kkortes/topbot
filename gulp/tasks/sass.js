var gulp = require('gulp'),
    gulpif = require('gulp-if'),
    less = require('gulp-sass'),
    cleanCSS = require('gulp-clean-css'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer');

var utils = require('../utils'),
  config = require('../config'),
  path = require('path');
 
gulp.task('sass', function () {
  var settings = {
    less: {
      outputStyle: 'compressed'
    },

    autoprefixer: {
      browsers: ['last 5 versions', '> 1%', 'ie 9']
    }
  };

  return gulp
    .src(config.sass.src)
    .pipe(gulpif(!config.production, sourcemaps.init()))
    .pipe(less(settings.sass))
    .on('error', utils.handleError)
    .pipe(autoprefixer(settings.autoprefixer))
    .on('error', utils.handleError)
    .pipe(gulpif(!config.production, sourcemaps.write()))
    .pipe(gulpif(config.production, cleanCSS()))
    .pipe(gulp.dest(config.sass.dest));
});