module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    meta: {
      version: '0.1.0'
    },
    uglify: {
      dist: {
        files: [{
          expand: true,
          cwd: 'source/js',
          src: ['**/*.js', '!*.min.js'],
          dest: 'dist/js',
          ext: '.min.js'
        }]
      }
    },
    jshint: {
      options: {
        curly: true,
        eqeqeq: true,
        immed: true,
        latedef: true,
        newcap: true,
        noarg: true,
        sub: true,
        undef: true,
        unused: true,
        boss: true,
        eqnull: true,
        browser: true,
        globals: {
          jQuery: true
        }
      }
    },
    sass: {
      dist: {
        files: [{
          expand: true,
          cwd: 'source/scss',
          src: ['*.scss'],
          dest: 'dist/css',
          ext: '.min.css'
        }],
        options: {
          style: 'compressed'
        }
      }
    },
    autoprefixer: {
      options: {
        browsers: ['last 2 versions', 'ie 9'],
        map: true
      },
      multiple_files: {
        expand: true,
        flatten: true,
        src: 'dist/css/*.css',
        dest: 'dist/css/'
      },
    },
    cssmin: {
      target: {
        files: [{
          expand: true,
          cwd: 'dist/css',
          src: ['*.css', '!*.min.css'],
          dest: 'dist/css',
          ext: '.min.css'
        }]
      }
    },
    imagemin: {
      dynamic: {
        files: [{
          expand: true,
          cwd: 'source/images/',
          src: ['**/*.{png,jpg,gif,svg}'],
          dest: 'dist/images/'
        }]
      }
    },
    watch: {
      files: ['source/js/*.js'],
      css: {
        files: 'source/scss/*.scss',
        tasks: ['sass:dist', 'autoprefixer']
      },
      scripts: {
        files: ['source/js/*'],
        tasks: ['uglify', 'jshint'],
        options: {
          spawn: false,
        },
      }
      /* images: {
        files: ['source/images/*'],
        tasks: ['imagemin:dynamic'],        
      } */
    }
  });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-contrib-uglify-es');
  //grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-autoprefixer');
  // Default task.
  grunt.registerTask('default', ['uglify','sass','cssmin','imagemin','watch']);

};
