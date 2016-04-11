jsFiles = 
  './assets/js/script.js' : 
    ['./bower_components/leaf-css-framework/js/libs/imagesloaded/imagesloaded.pkgd.min.js', 
    './bower_components/leaf-css-framework/js/libs/waves/dist/waves.js', 
    './bower_components/leaf-css-framework/js/script.js', 
    './assets/js/script.js']

module.exports = (grunt) ->
  # Project configuration.
  grunt.initConfig
    less:
      app:
        files:
          './assets/css/base.less.css' : './assets/less/base.less'
    stylus:
      app:
        options:
          compress: false
        files:
          './assets/css/base.styl.css' : './assets/styl/base.styl'
    imagemin:
      files:
         expand: true
         cwd: './assets/image/'
         src: ['**/*.{png,jpg,gif}'],
         dest: './assets/image/'
    uglify:
      app:
        options: 
          mangle: false,
          compress: false
        files: jsFiles          
      dist: 
        options: 
          mangle: true,
          compress: true
        files: jsFiles
          
    coffee:
      options:
        bare: true
      app:
        files:
          './assets/js/script.js' : ['assets/coffee/*.coffee']

    concat:
      app:
        src: [
          './bower_components/jquery/dist/jquery.min.js'
        ]
        dest: './assets/js/libs.js'

    watch:
      coffee:
        files: ['./assets/coffee/*.coffee']
        tasks: ['coffee', 'uglify:app', 'concat:app']
      styl:
        files: ['./assets/styl/*.styl']
        tasks: ['stylus:app']
      less:
        files: ['./assets/less/*.less']
        tasks: ['less:app']

    notify_hooks:
      options:
        enabled: true,
        success: true

  # These plugins provide necessary tasks.
  grunt.loadNpmTasks 'grunt-contrib-coffee'
  grunt.loadNpmTasks 'grunt-contrib-watch'
  grunt.loadNpmTasks 'grunt-contrib-concat'
  grunt.loadNpmTasks 'grunt-contrib-uglify'
  grunt.loadNpmTasks 'grunt-contrib-imagemin'
  grunt.loadNpmTasks 'grunt-contrib-cssmin'
  grunt.loadNpmTasks 'grunt-contrib-stylus'
  grunt.loadNpmTasks 'grunt-contrib-less'
  grunt.loadNpmTasks 'grunt-notify';
  # Default task.
  grunt.registerTask 'default', ['coffee', 'stylus:app', 'less:app', 'uglify:app', 'concat:app', 'watch']
  grunt.registerTask 'dist', ['coffee', 'stylus:app', 'less:app', 'uglify:dist', 'concat:app', 'uglify:dist']

  grunt.task.run 'notify_hooks'