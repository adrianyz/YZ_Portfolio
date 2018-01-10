module.exports = function(grunt){
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat : {
      dist: {
        src: [
          'js/modules/*.js',
          'js/app.js'
        ],
        dest: 'prod/production.js'
      }
    },

    uglify:{
      build: {
        src: 'prod/production.js',
        dest: 'prod/production.min.js'
      }
    },

    sass : {
      dist: {
        options:{
          style: 'compressed'
        },
      files: {
        'css/app.css':'sass/main.scss'
      }
    }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.registerTask('default',['concat', 'uglify', 'sass']);
};
