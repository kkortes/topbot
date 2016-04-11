jsFiles = 
  './assets/js/script.js' : ['./assets/js/script.js']

module.exports = (grunt) ->
  # Project configuration.
  grunt.initConfig
    less:
      app:
        files:
          './assets/css/base.css' : './assets/less/base.less'
    stylus:
      app:
        options:
          compress: false
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

    concat:
      app:
        src: [
          './bower_components/jquery/dist/jquery.min.js'
        ]
        dest: './assets/js/libs.js'

    autoprefixer:
      app:
        src: './assets/css/base.css'
        dest: './assets/css/base.css'

    watch:
      options:
        livereload: true #requires "live reload plugin"
      coffee:
        files: ['./assets/coffee/*.coffee']
        tasks: ['coffee', 'uglify:app', 'concat:app']
      styl:
        files: ['./assets/styl/*.styl']
        tasks: ['stylus:app', 'autoprefixer:app']
      less:
        files: ['./assets/less/*.less']
        tasks: ['less:app', 'autoprefixer:app']

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
  grunt.loadNpmTasks 'grunt-autoprefixer'
  grunt.loadNpmTasks 'grunt-notify';
  # Default task.
  grunt.registerTask 'default', ['coffee', 'stylus:app', 'less:app', 'uglify:app', 'concat:app', 'watch']
  grunt.registerTask 'dist', ['coffee', 'stylus:app', 'less:app', 'uglify:dist', 'concat:app', 'autoprefixer:app', 'uglify:dist']

  grunt.task.run 'notify_hooks'