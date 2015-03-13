jsFiles = 
  './assets/js/script.js' : 
    ['./bower_components/leaf-css-framework/js/libs/imagesloaded/imagesloaded.pkgd.min.js', 
    './bower_components/leaf-css-framework/js/libs/waves/dist/waves.js', 
    './bower_components/leaf-css-framework/js/script.js', 
    './assets/js/script.js']

module.exports = (grunt) ->
  # Project configuration.
  grunt.initConfig
    stylus:
      app:
        files:
          './assets/css/base.css' : './assets/styl/base.styl'
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
    watch:
      coffee:
        files: ['./assets/coffee/*.coffee']
        tasks: ['coffee', 'uglify:app']
      jsplugs:
        files: ['./assets/js/libs/*.js']
        tasks: ['uglify:app']
      styl:
        files: ['./assets/styl/*.styl']
        tasks: ['stylus:app']

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
  grunt.loadNpmTasks 'grunt-notify';
  # Default task.
  grunt.registerTask 'default', ['coffee', 'stylus:app', 'uglify:app', 'watch']
  grunt.registerTask 'dist', ['coffee', 'stylus:app', 'uglify:dist', 'uglify:dist']

  grunt.task.run 'notify_hooks'