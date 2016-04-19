
var gutil = require('gulp-util');

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

  vendorscripts: {
    src: ['./bower_components/jquery/dist/jquery.js'],
    dest: 'public/js'
  },

  concat: {
    src: 'assets/js/*',
    dest: 'public/js'
  },

  coffee: {
    src: 'assets/coffee/*.coffee',
    dest: 'assets/js'
  },

  images: {
    src: 'assets/image/**/*',
    dest: 'public/image'
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
      'public/image'
    ]
  }
};
