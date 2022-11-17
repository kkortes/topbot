import gulp from 'gulp'
import coffee from 'gulp-coffee'

import utils from '../utils'
import config from '../config'

gulp.task('coffee', () => {
  gulp.src(config.coffee.src)
    .pipe(coffee({bare: true}).on('error', utils.handleError))
    .pipe(gulp.dest(config.coffee.dest));
})