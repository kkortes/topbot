import gutil from "gulp-util";

module.exports = {
  production:
    gutil.env.production || process.env.NODE_ENV === "production" || false,

  stylus: {
    src: "assets/styl/base.styl",
    dest: "static/css",
  },

  less: {
    src: "assets/less/base.less",
    dest: "static/css",
  },

  sass: {
    src: "assets/scss/base.scss",
    dest: "static/css",
  },

  // libs: {
  //   src: ['./bower_components/jquery/dist/jquery.js'],
  //   dest: 'static/js'
  // },

  browserify: {
    src: ["assets/js/base.js"],
    dest: "static/js",
  },

  // concat: {
  //   src: 'assets/js/*',
  //   dest: 'static/js'
  // },

  // coffee: {
  //   src: 'assets/coffee/*.coffee',
  //   dest: 'assets/js'
  // },

  images: {
    src: "assets/images/**/*",
    dest: "static/images",
  },

  copy: {
    src: ["./assets/*icomoon/**/*", "./assets/*fonts/**/*"],
    dest: "static",
  },

  modernizr: {
    src: "assets/js/**/*",
    dest: "static/js/libs",
    args: {
      options: ["html5shiv", "setClasses"],
    },
  },

  clean: {
    src: ["static/css", "static/js", "static/images"],
  },
};
