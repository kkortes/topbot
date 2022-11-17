import gulp from 'gulp'
import changed from 'gulp-changed'

import utils from '../utils'
import config from '../config'

gulp.task('copy', () => {
  return gulp.src(config.copy.src)
    .pipe(changed(config.copy.dest))
    .pipe(gulp.dest(config.copy.dest))
    .on('error', utils.handleError);
})