var _ = require('lodash'),
  gulp = require('gulp'),
  chalk = require('chalk'),
  gulpif = require('gulp-if'),
  gutil = require('gulp-util'),
  watchify = require('watchify'),
  babelify = require('babelify'),
  uglify = require('gulp-uglify'),
  buffer = require('vinyl-buffer'),
  envify = require('envify/custom'),
  browserify = require('browserify'),
  source = require('vinyl-source-stream'),
  stripDebug = require('gulp-strip-debug');

var utils = require('../utils'),
  config = require('../config');

var defaults = {
  entries: ['./' + config.browserify.src],
  extensions: ['.js', '.jsx'],
  debug: !config.production
};

// gulp.task('es6', function() {
//   return browserify({
//         entries: config.es6.src
//     })
//     .transform(babelify.configure({
//         presets : ["es2015"]
//     }))
//     .bundle() 
//     .on('error', utils.handleError)
//     .pipe(source("app.js"))
//     .pipe(gulp.dest(config.es6.dest))
// });

var options = _.assign({}, watchify.args, defaults);

var compile = function (watch) {
  var bundler = browserify(options);

  if (watch) {
    bundler = watchify(bundler);
  }

  bundler
    .transform(envify(process.env))
    .transform(babelify.configure({
      ignore: /(bower_components)|(node_modules)/
    }));

  var rebundle = function () {
    return bundler
      .transform(babelify.configure({
          presets : ["es2015"]
      }))
      .bundle()
      .on('error', utils.handleError)
      .pipe(source('base.js'))
      .pipe(buffer())
      .pipe(gulpif(config.production, stripDebug()))
      .pipe(gulpif(config.production, uglify()))
      .pipe(gulp.dest(config.browserify.dest));
  };

  if (watch) {
    bundler.on('update', function () {
      gutil.log(`Starting '${chalk.cyan('watchify')}'...`);
      rebundle();
    });

    bundler.on('time', function (time) {
      var seconds = (Math.round(time / 10) / 100) + ' s',
        taskName = chalk.cyan('watchify'),
        taskTime = chalk.magenta(seconds);

      gutil.log(`Finished '${taskName}' after ${taskTime}`);
    });
  }

  return rebundle();
};

var watch = function () {
  return compile(true);
};

gulp.task('browserify', function () {
  return compile();
});

gulp.task('watchify', ['lint'], function () {
  return watch();
});
