import gulp from 'gulp'
import gulpif from 'gulp-if'
import less from 'gulp-less'
import cleanCSS from 'gulp-clean-css'
import sourcemaps from 'gulp-sourcemaps'
import autoprefixer from 'gulp-autoprefixer'

import utils from '../utils'
import config from '../config'
import path from 'path'
 
gulp.task('less', () => {
  var settings = {
    less:{
      paths: [ path.join(__dirname, 'less', 'includes') ]
    },

    autoprefixer: {
      browsers: ['last 5 versions', '> 1%', 'ie 9']
    }
  };

  return gulp
    .src(config.less.src)
    .pipe(gulpif(!config.production, sourcemaps.init()))
    .pipe(less(settings.less))
    .on('error', utils.handleError)
    .pipe(autoprefixer(settings.autoprefixer))
    .on('error', utils.handleError)
    .pipe(gulpif(!config.production, sourcemaps.write()))
    .pipe(gulpif(config.production, cleanCSS()))
    .pipe(gulp.dest(config.less.dest));
});