import gulp from 'gulp'
import gulpif from 'gulp-if'
import uglify from 'gulp-uglify'
import concat from 'gulp-concat'

import utils from '../utils'
import config from '../config'

gulp.task('libs', () => {
  gulp.src(config.libs.src)
    .on('error', utils.handleError)
    .pipe(concat('libs.js'))
    //.pipe(modernizr('modernizr-custom.js', config.modernizr.args))
    .pipe(gulpif(config.production, uglify()))
    .pipe(gulp.dest(config.libs.dest));
});