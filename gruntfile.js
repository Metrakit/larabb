module.exports = function(grunt) {

  grunt.initConfig({

  	compass: {

      sass: {
        options: {
          config: 'config.rb',
          cssDir: 'src/css',
          sassDir: 'src/sass'
        }
      },

      vendor: {
        options: {
          config: 'config.rb',
          cssDir: 'src/css',
          sassDir: 'src/vendor/sass'
        }
      }

  	}, 	

    concat: {

      js: {
				src:'src/js/**/*.js',				
				dest:'dist/js/main.min.js'
      },

      css: {
        src: [
              'src/css/master.css',
              'src/css/vendor.css',
             ],
        dest: 'src/css/main.css'
      }   

    },

  	cssmin: {

  	  minify: {
  	    expand: true,
  	    cwd: 'src/css/',
  	    src: 'main.css',
  	    dest: 'dist/css/',
  	    ext: '.min.css'
  	  }

  	},

    uglify: {

      dist: {
        files: {
          'dist/js/main.min.js': ['dist/js/main.min.js']
        }
      }

    },

    watch: {

      js: {
          files: 'src/js/**/*.js',
          tasks: ['concat:js', 'uglify'], 
          options: {
              livereload: true
          }
      },

      sass: {
        files: 'src/sass/**/*.scss',
        tasks: ['compass:sass', 'concat:css', 'cssmin'],
           options: {
              livereload: true
          }       
      },

      vendorSass: {
        files: 'src/vendor/sass/**/*.scss',
        tasks: ['compass:vendor', 'concat:css', 'cssmin'],
          options: {
              livereload: true
          }        
      },

      blade: {
        files: 'app/**/*.blade.php',
        options: {
            livereload: true
        }            
      }  

    }   

  })

  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['compass', 'concat', 'cssmin', 'uglify', 'watch']);
  //grunt.registerTask('dist', ['uglify:dist']);
}