import _ from 'lodash'
import gulp from 'gulp'
import chalk from 'chalk'
import gulpif from 'gulp-if'
import gutil from 'gulp-util'
import watchify from 'watchify'
import babelify from 'babelify'
import uglify from 'gulp-uglify'
import buffer from 'vinyl-buffer'
import envify from 'envify/custom'
import browserify from 'browserify'
import source from 'vinyl-source-stream'
import stripDebug from 'gulp-strip-debug'
import vueify from 'vueify'

import utils from '../utils'
import config from '../config'

var defaults = {
  entries: ['./' + config.browserify.src],
  extensions: ['.js', '.jsx'],
  debug: !config.production
}

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

var options = _.assign({}, watchify.args, defaults)

var compile = function (watch) {
  var bundler = browserify(options)

  if (watch) {
    bundler = watchify(bundler)
  }

  bundler
    .transform(vueify)
    .transform(envify(process.env))
    .transform(babelify.configure({
      ignore: /(bower_components)|(node_modules)/
    }))

  var rebundle = () => {
    return bundler
      .transform(babelify.configure({
          presets: ["es2015"]
      }))
      .bundle()
      .on('error', utils.handleError)
      .pipe(source('base.js'))
      .pipe(buffer())
      .pipe(gulpif(config.production, stripDebug()))
      .pipe(gulpif(config.production, uglify()))
      .pipe(gulp.dest(config.browserify.dest))
  };

  if (watch) {
    bundler.on('update', () => {
      gutil.log(`Starting '${chalk.cyan('watchify')}'...`);
      rebundle()
    });

    bundler.on('time', (time) => {
      var seconds = (Math.round(time / 10) / 100) + ' s',
        taskName = chalk.cyan('watchify'),
        taskTime = chalk.magenta(seconds)

      gutil.log(`Finished '${taskName}' after ${taskTime}`);
    });
  }

  return rebundle();
}

var watch = function () {
  return compile(true);
}

gulp.task('browserify', () => {
  return compile();
})

gulp.task('watchify', ['lint'], () => {
  return watch();
})
