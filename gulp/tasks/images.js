import gulp from 'gulp'
import changed from 'gulp-changed'

import utils from '../utils'
import config from '../config'

gulp.task('images', () => {
  return gulp.src(config.images.src)
    .pipe(changed(config.images.dest))
    .pipe(gulp.dest(config.images.dest))
    .on('error', utils.handleError);
})