import gulp from 'gulp'
import gulpif from 'gulp-if'
import uglify from 'gulp-uglify'
import concat from 'gulp-concat'

import utils from '../utils'
import config from '../config'

gulp.task('concat', () => {
  gulp.src('./'+config.concat.src)
    .on('error', utils.handleError)
    .pipe(concat('main.js'))
    //.pipe(modernizr('modernizr-custom.js', config.modernizr.args))
    .pipe(gulpif(config.production, uglify()))
    .pipe(gulp.dest(config.concat.dest));
});