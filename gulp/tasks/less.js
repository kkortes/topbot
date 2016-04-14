var gulp = require('gulp'),
    gulpif = require('gulp-if'),
    less = require('gulp-less'),
    minify = require('gulp-minify-css'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer');

var utils = require('../utils'),
  config = require('../config'),
  path = require('path');
 
gulp.task('less', function () {
  var settings = {
    less:{
      paths: [ path.join(__dirname, 'less', 'includes') ]
    },

    autoprefixer: {
      browsers: ['last 5 versions', '> 1%', 'ie 9']
    }
  };

  return gulp
    .src(config.less.src)
    .pipe(gulpif(!config.production, sourcemaps.init()))
    .pipe(less(settings.less))
    .on('error', utils.handleError)
    .pipe(autoprefixer(settings.autoprefixer))
    .on('error', utils.handleError)
    .pipe(gulpif(!config.production, sourcemaps.write()))
    .pipe(gulpif(config.production, minify()))
    .pipe(gulp.dest(config.less.dest));
});