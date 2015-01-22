module.exports = function(grunt) {


  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    //concat all the files into the build folder

    concat: {
      js:{
        src: [
          // TODO, include only req. foundation js files
          'bower_components/foundation/js/foundation.js',
          //'bower_components/FlexSlider/jquery.flexslider.js',
          'bower_components/responsive-nav/responsive-nav.js',
          'bower_components/slick-carousel/slick/slick.js',
          'bower_components/jquery-unveil/jquery.unveil.js',
          '../division-bar/js/division-bar.js',
          'javascript/*.js',
          'javascript/**/*.js'

        ],
        dest: 'build/build.src.js'
      }
    },

    //minify those concated files
    //toggle mangle to leave variable names intact

    uglify: {
      my_target:{
        files:{
        'build/build.js': ['build/build.src.js'],
        }
      }
    },

    watch: {
      scripts: {
        files: ['javascript/*.js', 'javascript/**/*.js'],
        tasks: ['concat', 'uglify'],
        options: {
          spawn: true,
          //livereload: true
        }
      }
    },

  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  //grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  // Note: order of tasks is very important
  grunt.registerTask('default', ['concat', 'watch']);

};
