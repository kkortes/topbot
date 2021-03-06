//require('dotenv').config({ silent: true });
//require('babel-core/register');

import gulp from 'gulp'
import requireDir from 'require-dir'

// Load additional gulp task
requireDir('./tasks');

gulp.task('watch', () => {
  gulp.watch('assets/styl/**/*', ['copy', 'stylus'])
  gulp.watch('assets/less/**/*', ['copy', 'less'])
  gulp.watch('assets/scss/**/*', ['copy', 'sass'])
  gulp.watch('assets/image/**/*', ['images'])
  gulp.watch('assets/js/**/*', ['browserify'])
  //gulp.watch(['assets/coffee/**/*'], ['coffee', 'concat', 'libs']);
});

gulp.task('default', ['copy', 'stylus', 'less', 'sass', 'images', 'browserify'])
// Unused
// 'modernizr',
// 'concat',
// 'coffee',
// 'libs',