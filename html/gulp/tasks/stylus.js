import gulp from 'gulp'
import gulpif from 'gulp-if'
import stylus from 'gulp-stylus'
import cleanCSS from 'gulp-clean-css'
import sourcemaps from 'gulp-sourcemaps'
import autoprefixer from 'gulp-autoprefixer'

import utils from '../utils'
import config from '../config'

gulp.task('stylus', () => {
  var settings = {
    stylus: {
      compress: false,
      //'include css': true,

      paths: [
        'node_modules'
      ],

      // import: [
      //   'normalize.css/normalize.css',
      //   '@ardentic/stylus-jiggers/jiggers',
      //   '@ardentic/stylus-mq/mq'
      // ]
    },

    autoprefixer: {
      browsers: ['last 5 versions', '> 1%', 'ie 9']
    }
  }

  return gulp
    .src(config.stylus.src)
    .pipe(gulpif(!config.production, sourcemaps.init()))
    .pipe(stylus(settings.stylus))
    .on('error', utils.handleError)
    .pipe(autoprefixer(settings.autoprefixer))
    .on('error', utils.handleError)
    .pipe(gulpif(!config.production, sourcemaps.write()))
    .pipe(gulpif(config.production, cleanCSS()))
    .pipe(gulp.dest(config.stylus.dest));
})
