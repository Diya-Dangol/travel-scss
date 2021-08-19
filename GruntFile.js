module.exports = function(grunt) {
    require('jit-grunt')(grunt);
    const sass = require('node-sass');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.initConfig({
        sass: {
            options: {
                implementation: sass,
                outputStyle: 'expanded',
                sourceMap: true,
                quiet: true // stop depreciation errors
            },
            dist: {
                files: {
                    'style.css': 'sass/style.scss'
                }
            }
        },
        postcss: {
            options: {
                map: true,
                processors: [
                    require('autoprefixer')()
                ]
            },
            dist: {
                src: 'style.css',
                dest: 'style.css'
            }
        },
        csscomb: {
            dist: {
                files: {
                    'style.css': ['style.css']
                }
            }
        },
        watch: {
            css: {
                files: '**/*.scss',
                tasks: ['sass', 'postcss','csscomb']
            }
        },
        copy: {
            fonts: {
                files:[
                    { expand: true, cwd: 'source/fonts/', src: ['**'], dest: './fonts/'},
                ]
            }
        }
    });
    grunt.registerTask('default', ['sass','postcss','csscomb','copy:fonts','watch']);
}
