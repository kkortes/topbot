import gutil from 'gulp-util'

module.exports = {
  production: gutil.env.production || process.env.NODE_ENV === 'production' || false,

  stylus: {
    src: 'assets/styl/base.styl',
    dest: 'public/css'
  },

  less: {
    src: 'assets/less/base.less',
    dest: 'public/css'
  },

  sass: {
    src: 'assets/scss/base.scss',
    dest: 'public/css'
  },

  // libs: {
  //   src: ['./bower_components/jquery/dist/jquery.js'],
  //   dest: 'public/js'
  // },

  browserify: {
    src: ['assets/js/base.js'],
    dest: 'public/js'
  },

  // concat: {
  //   src: 'assets/js/*',
  //   dest: 'public/js'
  // },

  // coffee: {
  //   src: 'assets/coffee/*.coffee',
  //   dest: 'assets/js'
  // },

  images: {
    src: 'assets/images/**/*',
    dest: 'public/images'
  },

  copy: {
    src: ['./assets/*icomoon/**/*', './assets/*fonts/**/*'],
    dest: 'public'
  },

  modernizr: {
    src: 'assets/js/**/*',
    dest: 'public/js/libs',
    args: {
      options: [
        'html5shiv',
        'setClasses'
      ]
    }
  },

  clean: {
    src: [
      'public/css',
      'public/js',
      'public/images'
    ]
  }
}