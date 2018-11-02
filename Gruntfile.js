module.exports = function(grunt) {
	// ===========================================================================
	// CONFIGURE GRUNT ===========================================================
	// ===========================================================================
    grunt.initConfig({
		// get the configuration info from package.json ----------------------------
		// this way we can use things like name and version (pkg.name)
		pkg: grunt.file.readJSON('package.json'),
		// compile less stylesheets to css
		concat: {
            options: {
                // Specifies string to be inserted between concatenated files
                stripBanners: false
            },
            basic: {
                src: [
					'assets/js/jquery-3.3.1.js',
                    'assets/js/popper-1.12.9.min.js',
                    'assets/js/bootstrap.4.0.0.js',
                    'assets/js/jquery.dataTables-1.10.16.min.js',
                    'assets/js/jquery.validate-1.16.0.min.js'
                ],
                dest: '_ui/responsive/common/js/combined.js',
            }
        },
        // configure uglify to minify js files
        uglify: {
            minifyJS: {
                files: {
                    '_ui/responsive/common/js/combined.min.js': ['_ui/responsive/common/js/combined.js']
                }
            }
        },
		less: {
			development: {
				options: {
					paths: ["assets/less"],
					yuicompress: false
				},
				files: {"_ui/responsive/common/css/style.css": "assets/less/style.less"}
			}
		},
		cmq: {
            options: {
                log: false
            },
            rccl: {
                files: {
                    '_ui/responsive/common/css/compile': ['_ui/responsive/common/css/style.css']
                }
            }
        },
		// configure cssmin to minify css files
        cssmin: {
            rccl: {
                options: {
                    keepSpecialComments: 0
                },
                files: {
                    '_ui/responsive/common/css/style.min.css': ['_ui/responsive/common/css/compile/style.css']
                }
            }
		},
		// configure watch to auto update
		watch: {
			all: {
               files: ['Gruntfile.js', 'assets/js/**/*.js','**/*.less', '**/*.css', '**/*.css'],
               tasks: ['concat', 'uglify','less', 'cmq', 'cssmin'],
               options: {
                   debounceDelay: 250
               }
           },
			scripts: {
				files: ['Gruntfile.js'],
				tasks: [],
				options: {
					debounceDelay: 250
				}
			},
			less: {
				files: ['assets/less/*.less', 'assets/css/**/.css'],
				tasks: ['less', 'cmq', 'cssmin'],
				options: {
					debounceDelay: 250
				}
			}
		}
    });

	// ===========================================================================
	// LOAD GRUNT PLUGINS ========================================================
	// ===========================================================================
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-combine-media-queries');

	// ===========================================================================
	// CREATE TASKS ==============================================================
	// ===========================================================================
    grunt.registerTask('default', ['concat', 'uglify', 'less', 'cmq', 'cssmin', 'watch:all']);

};
