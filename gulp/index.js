require('dotenv').config({ silent: true });
require('babel-core/register');

var gulp = require('gulp'),
  requireDir = require('require-dir');

// Load additional gulp task
requireDir('./tasks');

gulp.task('watch', function () {
  gulp.watch(['assets/styl/**/*'], ['copy', 'stylus']);
  gulp.watch(['assets/less/**/*'], ['copy', 'less']);
  gulp.watch(['assets/image/**/*'], ['images']);
  gulp.watch(['assets/js/**/*'], ['browserify']);
  //gulp.watch(['assets/coffee/**/*'], ['coffee', 'concat', 'libs']);
});

gulp.task('default', ['copy', 'stylus', 'less', 'images', 'browserify']);
// Unused
// 'modernizr',
// 'concat',
// 'coffee',
// 'libs',