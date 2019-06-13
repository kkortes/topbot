import gulp from 'gulp'
import gulpif from 'gulp-if'
import uglify from 'gulp-uglify'
import concat from 'gulp-concat'
import modernizr from 'gulp-modernizr'

import utils from '../utils'
import config from '../config'

gulp.task('modernizr', () => {
  gulp.src('./' + config.modernizr.src)
    .on('error', utils.handleError)
    .pipe(concat('modernizr-custom.js'))
    .pipe(modernizr('modernizr-custom.js', config.modernizr.args))
    .pipe(gulpif(config.production, uglify()))
    .pipe(gulp.dest(config.modernizr.dest));
});
